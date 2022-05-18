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
    return view('characters', [ "navlinks"=> $navlinks ]);
});

Route::get('/comics', function () {
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
    $comics = config('comics');

    return view('comics', [ "navlinks"=> $navlinks, "comics"=>$comics ]);
});

Route::get('/comics/data', function () {
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
    return view('data', [ "navlinks"=> $navlinks ]);
});

Route::get('/movies', function () {
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
    return view('movies', [ "navlinks"=> $navlinks ]);
});

Route::get('/tv', function () {
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
    return view('tv', [ "navlinks"=> $navlinks ]);
});

Route::get('/games', function () {
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
    return view('games', [ "navlinks"=> $navlinks ]);
});

Route::get('/collectibles', function () {
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
    return view('collectibles', [ "navlinks"=> $navlinks ]);
});

Route::get('/video', function () {
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
    return view('video', [ "navlinks"=> $navlinks ]);
});

Route::get('/fans', function () {
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
    return view('fans', [ "navlinks"=> $navlinks ]);
});

Route::get('/news', function () {
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
    return view('news', [ "navlinks"=> $navlinks ]);
});

Route::get('/shop', function () {
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
    return view('shop', [ "navlinks"=> $navlinks ]);
});


