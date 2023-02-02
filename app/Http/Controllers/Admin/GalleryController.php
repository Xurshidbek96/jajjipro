<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Requests\GalleryStoreRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('id', 'DESC')->paginate(5);
        return view('admin.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryStoreRequest $request)
    {
        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            $file = $request->file('img');
            $imageName = time().'-'.$file->getClientOriginalName();
            $imagePath = $file->move('images/', $imageName);
            $requestData['img'] = $imageName;
        }

        Gallery::create($requestData);
        return redirect()->route('galleries.index')->with('success', 'Success done');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\odel  $odel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\odel  $odel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);

        return view('admin.galleries.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\odel  $odel
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

        Gallery::find($id)->update($requestData);
        return redirect()->route('galleries.index')->with('success', 'Update done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\odel  $odel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->unlink_file($id);
        Gallery::find($id)->delete();
        return redirect()->route('galleries.index')->with('success', 'Delete done');
    }

    // extra functions
    public function unlink_file($id){
        $gallery = Gallery::find($id);
        if(isset($gallery->img) && file_exists(public_path('/images/'.$gallery->img))){
            unlink(public_path('/images/'.$gallery->img));
        }
    }
}
