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
            "text"=>"chararcters"
        ],
        [
            "text"=>"comics"
        ],
        [
            "text"=>"movies"
        ],
        [
            "text"=>"tv"
        ],
        [
            "text"=>"games"
        ],
        [
            "text"=>"collectibles"
        ],
        [
            "text"=>"video"
        ],
        [
            "text"=>"fans"
        ],
        [
            "text"=>"news"
        ],
        [
            "text"=>"shop"
        ],

    ];

    return view('home', [ "navlinks"=> $navlinks ]);

});

Route::get('/comics', function () {
    return view('comics');
});
