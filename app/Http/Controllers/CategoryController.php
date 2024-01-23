<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = \App\Models\Category::paginate(5);
        return view('pages.category.index', compact('categories'));
    }

    public function create()
    {
        return view('pages.category.create');
    }

    public function store(Request $request)
    {
        $filename = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/categories', $filename);

        $category = new \App\Models\Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->image = $filename;

        $category->save();

        return redirect()->route('category.index');
    }

    public function show($id)
    {
        return view('pages.dashboard');
    }

    public function edit($id)
    {
        $category = \App\Models\Category::findOrFail($id);
        return view('pages.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
    
        $data = $request->all();
        $category = \App\Models\Category::findOrFail($id);
        $category->update($data);
        
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $category = \App\Models\Category::findOrFail($id);
        $category->delete();
        
        return redirect()->route('category.index');
    }
}
