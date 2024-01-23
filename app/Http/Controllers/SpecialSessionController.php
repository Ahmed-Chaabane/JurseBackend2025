<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialSessionController extends Controller
{
    //index
    public function index()
    {
        $specialsessions = \App\Models\SpecialSession::paginate(5);
        return view('pages.special_sessions.index', compact('specialsessions'));
    }

    //create
    public function create()
    {
        return view('pages.special_sessions.create');
    }

    //store
    public function store(Request $request)
    {
        $specialsession = new \App\Models\SpecialSession;
        $specialsession->id = $request->id;
        $specialsession->title = $request->title;
        $specialsession->description = $request->description;
        $specialsession->spe_order = $request->spe_order;
        $specialsession->author_id = $request->author_id;
        $specialsession->save();


        return redirect()->route('specialsession.index');
    }

    //show
    public function show($id)
    {
        return view('pages.dashboard');
    }

    //edit
    public function edit($id)
    {
        $specialsession = \App\Models\SpecialSession::findOrFail($id);
        return view('pages.special_sessions.edit', compact('specialsession'));
    }

    //update
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $specialsession = \App\Models\SpecialSession::findOrFail($id);
        $specialsession->update($data);
        return redirect()->route('specialsession.index');

    }

    //destroy
    public function destroy($id)
    {
        $specialsession = \App\Models\SpecialSession::findOrFail($id);
        $specialsession->delete();
        return redirect()->route('specialsession.index');
    }
}
