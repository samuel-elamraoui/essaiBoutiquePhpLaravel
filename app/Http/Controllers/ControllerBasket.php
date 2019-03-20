<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ControllerBasket extends Controller{

    public function ajoutPanier(Request $request ,$id)
{
    if ( ! $request->session()->has('panier')) {
        $basket = new Order;
        $basket->date_order = '2019-03-19';
        $basket->status = 'P';
        $basket->delivery_cost = 0;
        $basket->adr_delivery = 17;
        $basket->adr_invoice = 17;
        $basket->customer_id = 7;
        $basket->save();

        $basket->products()->attach($id, ['quantity' => 10]);

        Session::put('panier', $basket->id);
    } else {
        $orderId = $request->session()->get('panier');
        $basket = Order::find($orderId);
        $basket->products()->attach($id, ['quantity' => 10]);
    }

    return redirect(route('listeProduit'));
}

    Public function store()
    {
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