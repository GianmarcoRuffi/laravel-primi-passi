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

    $array = [
        'lista' => 5
    ];

    return view('homepage', $array);
})->name('homepage');


Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');

Route::get('/forum', function () {
    return view('forum');
})->name('forum');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');




