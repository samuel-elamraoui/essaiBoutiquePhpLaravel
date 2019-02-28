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

Route::get('/commandes/recherche', 'ControllerOrder@search');

Route::get('/commandes/', 'ControllerOrder@index');

Route::get('/commandes/repasser', 'ControllerOrder@reorder');

Route::get('/commandes/annuler', 'ControllerOrder@cancel');

Route::get('/commandes/{commandeId}', 'ControllerOrder@testUrl');

Route::get('/commandes/annuler/{nom}', 'ControllerOrder@cancelUrl');
