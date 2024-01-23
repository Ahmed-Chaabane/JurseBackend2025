<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = \App\Models\Page::paginate(5);
        return view('pages.page.index', compact('pages'));
    }

    public function create()
    {
        return view('pages.page.create');
    }

    public function store(Request $request)
    {
        $page = new \App\Models\Page;
        $page->name = $request->name;

        $page->save();

        return redirect()->route('page.index');
    }

    public function show($id)
    {
        return view('pages.dashboard');
    }

    public function edit($id)
    {
        $page = \App\Models\Page::findOrFail($id);
        return view('pages.page.edit', compact('page'));
    }

    public function update(Request $request, $id)
    {
    
        $data = $request->all();
        $page = \App\Models\Page::findOrFail($id);
        $page->update($data);
        
        return redirect()->route('page.index');
    }

    public function destroy($id)
    {
        $page = \App\Models\Page::findOrFail($id);
        $page->delete();
        
        return redirect()->route('page.index');
    }
}
