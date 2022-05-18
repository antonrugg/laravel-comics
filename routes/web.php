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
            "text"=>"chararcters",
            "url"=>"/chararcters"
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

Route::get('/comics', function () {
    return view('comics');
});
