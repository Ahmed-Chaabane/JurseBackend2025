<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        $links = \App\Models\Link::paginate(5);
        return view('pages.link.index', compact('links'));
    }

    public function create()
    {
        $pages = \App\Models\Page::all();
        return view('pages.link.create', compact('pages'));
    }

    public function store(Request $request)
    {
        
        $link = new \App\Models\Link;
        $link->href = $request->href;
        $link->page_id = $request->page_id;
      
        $link->save();

        return redirect()->route('link.index');
    }

    public function show($id)
    {
        return view('pages.dashboard');
    }

    public function edit($id)
    {
        $link = \App\Models\Link::findOrFail($id);
        $pages = \App\Models\Page::all();
        return view('pages.link.edit', compact('link','pages'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $link = \App\Models\Link::findOrFail($id);
        $link->update($data);
       return redirect()->route('link.index');
    }

    public function destroy($id)
    {
        $link = \App\Models\Link::findOrFail($id);
        $link->delete();
        return redirect()->route('link.index');
    }
}
