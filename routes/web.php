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
$menu = config('menu');
$data = [
    'menu' => $menu,
];
Route::get('/', function () use($data) {
    // // $collection = collect($data);
    // // $data = $collection->collapse();
    // // $data->all();
    // // dd($data);
    // return view('home', $data);
    $data = array_merge($data, ['comics' => config("comics")]);
    return view('home', $data);
})->name('homepage');

// dd($data);