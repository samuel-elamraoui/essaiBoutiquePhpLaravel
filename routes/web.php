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

Route::get('/produit/', 'ControllerProduct@index');

Route::get('/panier/', function () {
    return view('panier');
});

Route::get('/commandes/', function () {
    return view('commandes');
});

Route::get('/produit/{fromUrl}', function ($fromUrl) {
    return view('produit', ['fromUrl' => $fromUrl]);
});
