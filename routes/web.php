<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\SpecialSessionController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VideoController;
use App\Models\Tweet;
use App\Models\Activities;
use App\Models\Country;
use App\Models\Author;
use App\Models\KeynoteSpeaker;
use App\Models\Task;
use App\Models\Link;
use App\Models\Page;
use App\Models\Sponsor;
use App\Models\Photo;
use App\Models\Video;
use App\Models\Organizer;
use App\Models\User;
use App\Models\SpecialSession;

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
        $specialSessions = SpecialSession::all();
        $tasks = Task::all();
        $links = Link::all();
        $pages = Page::all();
        $sponsors = Sponsor::all();
        $photos = Photo::all();
        $videos = Video::all();
        $organizers = Organizer::all();
        $totalUsers = User::count();
        $totalTweets = Tweet::count();
        $totalCountry = Country::count();
        $totalPhoto = Photo::count();
        $totalVideo = Video::count();

        return view('pages.dashboard', compact('tweets', 'activities', 'countries', 'authors', 'keynoteSpeakers', 'tasks', 'links', 'pages', 'sponsors',
            'photos', 'videos', 'organizers', 'totalUsers', 'totalTweets', 'totalCountry', 'totalPhoto', 'totalVideo', 'specialSessions'));
    })->name('home');
    //user
    Route::resource('user', UserController::class);
    //category
    Route::resource('category', \App\Http\Controllers\CategoryController::class);
    //Product
    Route::resource('product', \App\Http\Controllers\ProductController::class);
    //task
    Route::resource('task', \App\Http\Controllers\TaskController::class);
    //keynotespeaker
    Route::resource('keynotespeaker', \App\Http\Controllers\KeynotespeakerController::class);
    //Tweet
    Route::resource('tweet', \App\Http\Controllers\TweetController::class);
    //Author
    Route::resource('author', \App\Http\Controllers\AuthorController::class);
    //Organizers
    Route::resource('organizers', \App\Http\Controllers\OrganizersController::class);
    //SpecialSessions
    Route::resource('specialsession', \App\Http\Controllers\SpecialSessionController::class);
    //Sponsor
    Route::resource('sponsor', \App\Http\Controllers\SponsorController::class);
    //Photo
    Route::resource('photo', \App\Http\Controllers\PhotoController::class);
    //Video
    Route::resource('video', \App\Http\Controllers\VideoController::class);


});
