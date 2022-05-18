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
    $navlinks = [
        [
            "text"=>"characters",
            "url"=>"/characters"
        ],
        [
            "text"=>"comics",
            "url"=>"/comics"
        ],
        [
            "text"=>"movies",
            "url"=>"/movies"
        ],
        [
            "text"=>"tv",
            "url"=>"/tv"
        ],
        [
            "text"=>"games",
            "url"=>"/games"
        ],
        [
            "text"=>"collectibles",
            "url"=>"/collectibles"
        ],
        [
            "text"=>"video",
            "url"=>"/video"
        ],
        [
            "text"=>"fans",
            "url"=>"/fans"
        ],
        [
            "text"=>"news",
            "url"=>"/news"
        ],
        [
            "text"=>"shop",
            "url"=>"/shop"
        ],

    ];

    return view('home', [ "navlinks"=> $navlinks ]);

});

Route::get('/characters', function () {
    return view('characters');
});

Route::get('/comics', function () {
    return view('comics');
});

Route::get('/comics/data', function () {
    return view('data');
});

Route::get('/movies', function () {
    return view('movies');
});

Route::get('/tv', function () {
    return view('tv');
});

Route::get('/games', function () {
    return view('games');
});

Route::get('/collectibles', function () {
    return view('collectibles');
});

Route::get('/video', function () {
    return view('video');
});

Route::get('/fans', function () {
    return view('fans');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/shop', function () {
    return view('shop');
});


