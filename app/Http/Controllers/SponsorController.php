<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SponsorController extends Controller
{
    //index
    public function index()
    {
        $sponsors = \App\Models\sponsor::paginate(5);
        return view('pages.sponsor.index', compact('sponsors'));
    }

    //create
    public function create()
    {
        return view('pages.sponsor.create');
    }

    //store
    public function store(Request $request)
    {
        $sponsor = new \App\Models\sponsor;
        $sponsor->id = $request->id;
        $sponsor->src = $request->src;
        $sponsor->alt = $request->alt;
        $sponsor->spo_order = $request->spo_order;
        $sponsor->save();


        return redirect()->route('sponsor.index');
    }

    //show
    public function show($id)
    {
        return view('pages.dashboard');
    }

    //edit
    public function edit($id)
    {
        $sponsor = \App\Models\sponsor::findOrFail($id);
        return view('pages.sponsor.edit', compact('sponsor'));
    }

    //update
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $sponsor = \App\Models\sponsor::findOrFail($id);
        $sponsor->update($data);
        return redirect()->route('sponsor.index');

    }

    //destroy
    public function destroy($id)
    {
        $sponsor = \App\Models\sponsor::findOrFail($id);
        $sponsor->delete();
        return redirect()->route('sponsor.index');
    }
}
