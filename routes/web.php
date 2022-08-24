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
    return view('home', $data);
    $comic_array = config('comics');
    $data = [
        'comic_array' => $comic_array,
    ];
})->name('home');



Route::get('/card', function () {
    
    return view('card');
});