<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    //index
    public function index()
    {
        $photos = \App\Models\Photo::paginate(5);
        return view('pages.photo.index', compact('photos'));
    }

    //create
    public function create()
    {
        return view('pages.photo.create');
    }

    //store
    public function store(Request $request)
    {
        $photo = new \App\Models\Photo;
        $photo->id = $request->id;
        $photo->vpath = $request->vpath;
        $photo->alt = $request->alt;
        $photo->title = $request->title;
        $photo->pho_order = $request->pho_order;
        $photo->save();


        return redirect()->route('photo.index');
    }

    //show
    public function show($id)
    {
        return view('pages.dashboard');
    }

    //edit
    public function edit($id)
    {
        $photo = \App\Models\Photo::findOrFail($id);
        return view('pages.photo.edit', compact('photo'));
    }

    //update
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $photo = \App\Models\Photo::findOrFail($id);
        $photo->update($data);
        return redirect()->route('photo.index');

    }

    //destroy
    public function destroy($id)
    {
        $photo = \App\Models\Photo::findOrFail($id);
        $photo->delete();
        return redirect()->route('photo.index');
    }
}
