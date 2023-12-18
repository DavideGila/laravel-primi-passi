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
    $data = [
        'greeting' => 'Hello',
        'name' => 'World'
    ];
    return view('home', $data);
})->name('home');

Route::get('/movie', function () {
    $data = [
        'hello' => 'Hello',
        'name'=> 'Movie'
    ];
    return view('pages.movie', $data);
})->name('movie');
