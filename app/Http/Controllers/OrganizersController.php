<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizersController extends Controller
{
    public function index()
    {
        /* $authors = \App\Models\Author::all();
        return view('pages.authors.index', ['authors' => $authors]); */
         $organizers = \App\Models\Organizers::paginate(5);
        return view('pages.organizers.index', compact('organizers'));
    }
    public function create()
    {
        $organizers = \App\Models\Organizers::all();
        return view('pages.organizers.create', compact('organizers'));
        /* $categories = \App\Models\Category::all();
        return view('pages.product.create', compact('categories')); */
    }
    public function store(Request $request)
    {
        $organizers = new \App\Models\Organizers;
        $organizers->src=$request->src;
        $organizers->alt=$request->alt;
        $organizers->org_order=$request->org_order;

        $organizers->save();
        return redirect()->route('organizers.index');
    }
    public function edit($id)
    {
        $organizers = \App\Models\Organizers::findOrFail($id);
        return view('pages.organizers.edit', compact('organizers'));
    }

    //update
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $organizers = \App\Models\Organizers::findOrFail($id);
        $organizers->update($data);
        return redirect()->route('organizers.index');
    }

    //destroy
    public function destroy($id)
    {
        $organizers = \App\Models\Organizers::findOrFail($id);
        $organizers->delete();
        return redirect()->route('author.index');
    }
}
