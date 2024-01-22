<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeynotespeakerController extends Controller
{
     //index
     public function index()
     {
         $keynotespeakers = \App\Models\Keynotespeaker::paginate(5);
         return view('pages.keynote_speaker.index', compact('keynotespeakers'));
     }
 
     //create
     public function create()
     {
         return view('pages.keynote_speaker.create');
     }
 
     //store
     public function store(Request $request)
     {
         $keynotespeaker = new \App\Models\Keynotespeaker;
         $keynotespeaker->firstname = $request->firstname;
         $keynotespeaker->lastname = $request->lastname;
         $keynotespeaker->description = $request->description;
         $keynotespeaker->website = $request->website;
         $keynotespeaker->save();
 
         return redirect()->route('keynotespeaker.index');
     }

     //show
    public function show($id)
    {
        return view('pages.dashboard');
    }

    //edit
    public function edit($id)
    {
        $keynotespeaker = \App\Models\Keynotespeaker::findOrFail($id);
        return view('pages.keynote_speaker.edit', compact('keynotespeaker'));
    }

    //update
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $keynotespeaker = \App\Models\keynotespeaker::findOrFail($id);
        $keynotespeaker->update($data);
        return redirect()->route('keynotespeaker.index');

    }

    //destroy
    public function destroy($id)
    {
        $keynotespeaker = \App\Models\Keynotespeaker::findOrFail($id);
        $keynotespeaker->delete();
        return redirect()->route('keynotespeaker.index');
    }
}
