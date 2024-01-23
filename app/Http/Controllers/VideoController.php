<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    //index
    public function index()
    {
        $videos = \App\Models\Video::paginate(5);
        return view('pages.video.index', compact('videos'));
    }

    //create
    public function create()
    {
        return view('pages.video.create');
    }

    //store
    public function store(Request $request)
    {
        $video = new \App\Models\Video;
        $video->id = $request->id;
        $video->vpath = $request->vpath;
        $video->title = $request->title;
        $video->vid_order = $request->vid_order;
        $video->save();


        return redirect()->route('video.index');
    }

    //show
    public function show($id)
    {
        return view('pages.dashboard');
    }

    //edit
    public function edit($id)
    {
        $video = \App\Models\Video::findOrFail($id);
        return view('pages.video.edit', compact('video'));
    }

    //update
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $video = \App\Models\Video::findOrFail($id);
        $video->update($data);
        return redirect()->route('video.index');

    }

    //destroy
    public function destroy($id)
    {
        $video = \App\Models\Video::findOrFail($id);
        $video->delete();
        return redirect()->route('video.index');
    }
}
