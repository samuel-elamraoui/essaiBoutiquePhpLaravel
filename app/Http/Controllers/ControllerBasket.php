<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerBasket extends Controller{

    public function ajoutPanier()
{
        return view('basket.addBasket');
}
    public function supprimPanier(){
        return view ('basket.delete');
    }

    public function Panier(){
        return view ('basket.index');
    }
    public function PanierAjour(){
        return view ('basket.Post_index');
    }
}