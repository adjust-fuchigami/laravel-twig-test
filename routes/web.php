<?php

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

use Carbon\Carbon;

Route::get('/', function () {
    return view('welcome');
});

// Blade 
Route::get('/blade/plain', function() {
    return view('blade.plain');
});

Route::get('/blade/inherit', function() {
    return view('blade.inherit');
});

Route::get('/blade/include', function() {
    $infomations = [];
    $posts       = [];

    for ($i = 0, $max = 5; $i < $max; $i++)
    {
        $infomations[] = [
           'title'      => sprintf('infomation_%03d', $i),
           'posted_at' => Carbon::now()->addHours($i),
        ];

        $posts[] = [
           'title'     => sprintf('post_%03d', $i),
           'posted_by' => sprintf('user_%03d', $i),
           'posted_at' => Carbon::now()->addHours($i),
        ];
    }

    return view('blade.include', compact('infomations', 'posts'));
});

// Twig
Route::get('/twig/plain', function() {
    return view('twig.plain');
});

Route::get('/twig/inherit', function() {
    return view('twig.inherit');
});

Route::get('/twig/include', function() {
    $infomations = [];
    $posts       = [];

    for ($i = 0, $max = 25; $i < $max; $i++)
    {
        $infomations[] = [
           'title'      => sprintf('infomation_%03d', $i),
           'posted_at' => Carbon::now()->addHours($i),
        ];

        $posts[] = [
           'title'     => sprintf('post_%03d', $i),
           'posted_by' => sprintf('user_%03d', $i),
           'posted_at' => Carbon::now()->addHours($i),
        ];
    }

    return view('twig.include', compact('infomations', 'posts'));
});
