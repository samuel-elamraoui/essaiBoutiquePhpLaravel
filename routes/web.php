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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/catalogue/', function () {
    return view('catalogue');
});
Route::get('/panier/', function () {
    return view('panier');
});


Route::get('/commandes/', function () {
    return view('commandes');
});


Route::get('/{fromUrl}', function ($fromUrl) {
    return view('welcome', ['fromUrl' => $fromUrl]);
});
