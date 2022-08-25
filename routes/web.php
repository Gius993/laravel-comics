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
        'comic_array' => config('comics')
    ];
    return view('home', $data);
    
    
})->name('home');



Route::get('/card/{id}', function ($id) {
    $data = [
        'comic_array' => config('comics')
    ];
    $current_card = [];
    foreach($data as $heroes){
        if($heroes['id'] == $id){
            $current_card = $heroes;
        }
    }
    return view('card');
})->name('card');
