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

route:: get('/produit','ControllerProduct@index');
route:: get('/produit/CreerProduit','ControllerProduct@Create');
route:: get('/produit/Sauvegarde','ControllerProduct@Store');
route:: get('/produit/EditerProduit','ControllerProduct@Edit');
route:: get('/produit/{productID}','ControllerProduct@Show');
route:: get('/produit/MiseaJour','ControllerProduct@Update');
route:: get('/produit/SuppressionProduit','ControllerProduct@Destroy');
