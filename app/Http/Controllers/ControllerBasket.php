<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;
use Illuminate\Http\Request;


class ControllerBasket extends Controller{

    public function ajoutPanier($id)
{
//    $product = product::find($id);

    $basket = new Order;
    $basket->date_order='2019-03-19';
    $basket->status = 'P';
    $basket->delivery_cost = 0;
    $basket->adr_delivery = 17;
    $basket->adr_invoice = 17;
    $basket->customer_id = 7;
    $basket->save();

    $basket->products()->attach($id, ['quantity' => 10]);

    return view('basket.addBasket', ['panier' => $basket]);
}

    Public function store(){

        $basket = new Order;
        $basket->date_order='2019-03-19';
        $basket->status = 'P';
        $basket->delivery_cost = 0;
        $basket->adr_delivery = 17;
        $basket->adr_invoice = 17;
        $basket->customer_id = 7;
        $basket->save();

        $basket->products()->attach($id, ['quantity' => 10]);


        return view('basket.index');
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