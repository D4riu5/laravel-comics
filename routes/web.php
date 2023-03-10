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
Route::get('/characters', function () {
    return view('characters', [
        'links' => config('links'),
    ]);
})->name('characters');

Route::get('/', function () {
    return view('comics', [
        'comics' => config('comics'),
        'links' => config('links'),
    ]);
})->name('comics');

Route::get('/movies', function () {
    return view('movies', [
        'links' => config('links'),
    ]);
})->name('movies');

Route::get('/tv', function () {
    return view('tv', [
        'links' => config('links'),
    ]);
})->name('tv');

Route::get('/games', function () {
    return view('games', [
        'links' => config('links'),
    ]);
})->name('games');



Route::get('/videos', function () {
    return view('videos', [
        'links' => config('links'),
    ]);
})->name('videos');