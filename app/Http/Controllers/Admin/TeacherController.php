<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Requests\TeacherStoreRequest;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::orderBy('id', 'DESC')->paginate(5);
        return view('admin.teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherStoreRequest $request)
    {
        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            $file = $request->file('img');
            $imageName = time().'-'.$file->getClientOriginalName();
            $file->move('images/', $imageName);

            $requestData['img'] = $imageName;
        }

        Teacher::create($requestData);
        return redirect()->route('teachers.index')->with('success', 'Success done');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);

        return view('admin.teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);

        return view('admin.teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();


        if($request->hasFile('img'))
        {
            $this->unlink_file($id);

            $file = $request->file('img');
            $imageName = time().'-'.$file->getClientOriginalName();
            $imagePath = $file->move('images/', $imageName);
            $requestData['img'] = $imageName;

        }

        Teacher::find($id)->update($requestData);
        return redirect()->route('teachers.index')->with('success', 'Update done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->unlink_file($id);
        Teacher::find($id)->delete();
        return redirect()->route('teachers.index')->with('success', 'Delete done');
    }

    // extra functions
    public function unlink_file($id){
        $teacher = Teacher::find($id);
        if(isset($teacher->img) && file_exists(public_path('/images/'.$teacher->img))){
            unlink(public_path('/images/'.$teacher->img));
        }
    }
}
