<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $navlinks = config('navlinks');
    return view('home', [ "navlinks"=> $navlinks ]);

});

Route::get('/characters', function () {
    $navlinks = config('navlinks');
    return view('characters', [ "navlinks"=> $navlinks ]);
});

Route::get('/comics', function () {
    
    $comics = config('comics');
    $navlinks = config('navlinks');

    return view('comics', [ "navlinks"=> $navlinks, "comics"=>$comics ]);
});

Route::get('/comics/data/{id}', function ($id) {
    $comics = config('comics');
    $navlinks = config('navlinks'); 
    return view('data', [ "navlinks"=> $navlinks, "comics"=>$comics[$id] ]);
});

Route::get('/movies', function () {
    $navlinks = config('navlinks');
    return view('movies', [ "navlinks"=> $navlinks ]);
});

Route::get('/tv', function () {
    $navlinks = config('navlinks');
    return view('tv', [ "navlinks"=> $navlinks ]);
});

Route::get('/games', function () {
    $navlinks = config('navlinks');
    return view('games', [ "navlinks"=> $navlinks ]);
});

Route::get('/collectibles', function () {
    $navlinks = config('navlinks');
    return view('collectibles', [ "navlinks"=> $navlinks ]);
});

Route::get('/video', function () {
    $navlinks = config('navlinks');
    return view('video', [ "navlinks"=> $navlinks ]);
});

Route::get('/fans', function () {
    $navlinks = config('navlinks');
    return view('fans', [ "navlinks"=> $navlinks ]);
});

Route::get('/news', function () {
    $navlinks = config('navlinks');
    return view('news', [ "navlinks"=> $navlinks ]);
});

Route::get('/shop', function () {
    $navlinks = config('navlinks');
    return view('shop', [ "navlinks"=> $navlinks ]);
});


