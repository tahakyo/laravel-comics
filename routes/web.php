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
$comics = config('comics');
$menu = config('menu');
$data = [
    'menu' => $menu,
    'comics' => $comics
];
Route::get('/', function () use($data) {
   
    return view('home', $data);
})->name('homepage');

route::get('/comics', function() use($data) {

    return view('comics', $data);
})->name('comics-list');

route::get('/comics/single-comic', function() use($data) {
    
    return view('single-comic', $data);
})->name('single-comic');


