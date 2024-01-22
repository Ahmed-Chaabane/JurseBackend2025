<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    //index
    public function index()
    {
        $tweets = \App\Models\Tweet::paginate(5);
        return view('pages.tweet.index', compact('tweets'));
    }

    //create
    public function create()
    {
        return view('pages.tweet.create');
    }

    //store
    public function store(Request $request)
    {
        $tweet = new \App\Models\Tweet;
        $tweet->link = $request->link;
        $tweet->content = $request->content;
        $tweet->datetweet = $request->datetweet;
        $tweet->save();

        return redirect()->route('tweet.index');
    }

    //show
   public function show($id)
   {
       return view('pages.dashboard');
   }

   //edit
   public function edit($id)
   {
       $tweet = \App\Models\Tweet::findOrFail($id);
       return view('pages.tweet.edit', compact('tweet'));
   }

   //update
   public function update(Request $request, $id)
   {
       $data = $request->all();
       $tweet = \App\Models\Tweet::findOrFail($id);
       $tweet->update($data);
       return redirect()->route('tweet.index');

   }

   //destroy
   public function destroy($id)
   {
       $tweet = \App\Models\Tweet::findOrFail($id);
       $tweet->delete();
       return redirect()->route('tweet.index');
   }
}
