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


/// route produit//////
Route:: get('/produit','ProductController@index')->name('listeProduit'); //route vers liste de produit/catalogue
Route:: get('/produit/trierParPrix','ProductController@indexPrix');
Route:: get('/produit/trierParNom','ProductController@indexNom');
Route:: get('/produit/{productID}','ProductController@show')->name('fiche'); //route vers fiche produit


// route order
Route::get('/commandes/recherche', 'ControllerOrder@search');
Route::get('/commandes/', 'ControllerOrder@index');
Route::get('/commandes/repasser', 'ControllerOrder@reorder');
Route::get('/commandes/{commandeId}', 'ControllerOrder@testUrl');
Route::get('/commandes/annuler/{nom}', 'ControllerOrder@cancelUrl');
Route::get('/commandes/annuler', 'ControllerOrder@cancel');

//// USER
Route::get('/users/creation', 'ControllerUsers@create');
Route::get('/users', 'ControllerUsers@confirmSave');
Route::get('/users/connexion', 'ControllerUsers@login');


///Basket
//route::get('/basket/add/productId');
route::get('/basket/delete/','ControllerBasket@supprimPanier');
route::get('/basket','ControllerBasket@panier');
route::get('/basket/update/','ControllerBasket@PanierAjour');
Route:: get('/produit/MiseaJour','ProductController@update');
Route:: get('/produit/Suppression','ProductController@destroy');


///admin
Route:: get('/produit/creer','ProductController@create');
Route:: get('/produit/Sauvegarde','ProductController@store');
Route:: get('/produit/Editer','ProductController@edit');