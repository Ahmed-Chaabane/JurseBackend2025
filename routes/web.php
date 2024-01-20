<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TweetController;
use App\Models\Tweet;
use App\Models\Activities;
use App\Models\Country;
use App\Models\Author;
use App\Models\KeynoteSpeaker;
use App\Models\Task;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        $tweets = Tweet::all();
        $activities = Activities::all();
        $countries = Country::all();
        $authors = Author::all();
        $keynoteSpeakers = KeynoteSpeaker::all();
        $tasks = task::all();


        return view('pages.dashboard', compact('tweets', 'activities', 'countries', 'authors', 'keynoteSpeakers', 'tasks'));
    })->name('home');
    Route::resource('user', UserController::class);
    //category
    Route::resource('category', \App\Http\Controllers\CategoryController::class);
    //product
    Route::resource('product', \App\Http\Controllers\ProductController::class);
});
