<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        /* $authors = \App\Models\Author::all();
        return view('pages.authors.index', ['authors' => $authors]); */
         $authors = \App\Models\Author::paginate(5);
        return view('pages.authors.index', compact('authors'));
    }
    public function create()
    {
        $authors = \App\Models\Author::all();
        return view('pages.authors.create', compact('authors'));
        /* $categories = \App\Models\Category::all();
        return view('pages.product.create', compact('categories')); */
    }
    public function store(Request $request)
    {
        $author = new Author;
        $author->firstname=$request->firstname;
        $author->lastname=$request->lastname;
        $author->website=$request->website;
        $author->description=$request->description;
        $author->organism=$request->organism;
        $author->save();
        return redirect()->route('author.index');
    }
    public function edit($id)
    {
        $authors = Author::findOrFail($id);
        return view('pages.authors.edit', compact('authors'));
    }

    //update
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $user = Author::findOrFail($id);
        $user->update($data);
        return redirect()->route('author.index');
    }

    //destroy
    public function destroy($id)
    {
        $user = Author::findOrFail($id);
        $user->delete();
        return redirect()->route('author.index');
    }

}
