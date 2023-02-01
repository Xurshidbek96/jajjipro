<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Win;
use App\Http\Requests\WinStoreRequest;

class WinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wins = Win::orderBy('id', 'DESC')->paginate(5);
        return view('admin.wins.index', compact('wins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.wins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WinStoreRequest $request)
    {
        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            $file = $request->file('img');
            $imageName = time().'-'.$file->getClientOriginalName();
            $file->move('images/', $imageName);
            $requestData['img'] = $imageName;
        }

        Win::create($requestData);
        return redirect()->route('wins.index')->with('success', 'Success done');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $win = Win::find($id);

        return view('admin.wins.show', compact('win'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $win = Win::find($id);

        return view('admin.wins.edit', compact('win'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            $win = Win::find($id);
            if(isset($win->img) && file_exists(public_path('/images/'.$win->img))){
                unlink(public_path('/images/'.$win->img));
            }

            $file = $request->file('img');
            $imageName = time().'-'.$file->getClientOriginalName();
            $imagePath = $file->move('images/', $imageName);
            $requestData['img'] = $imageName;

        }

        Win::find($id)->update($requestData);
        return redirect()->route('wins.index')->with('success', 'Update done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $win = Win::find($id);
        if(isset($win->img) && file_exists(public_path('/images/'.$win->img))){
            unlink(public_path('/images/'.$win->img));
        }
        Win::find($id)->delete();
        return redirect()->route('wins.index')->with('success', 'Delete done');
    }
}
