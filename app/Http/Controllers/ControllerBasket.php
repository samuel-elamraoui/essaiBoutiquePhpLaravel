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

        $basket->products()->attach($id, ['quantity' => 1]);

        Session::put('panier', $basket->id);
    } else {
        $orderId = $request->session()->get('panier');
        $basket = Order::find($orderId);
        $basket->products()->attach($id, ['quantity' => 1]);
    }

    return redirect(route('listeProduit'));
    }

    public function suppLine(Request $request, $id)
    {
        $product = Product::find($id);
        $orderId = $request->session()->get('panier');
        $product->orders()->detach($orderId);
        return redirect(route('basket'));
    }

    public function supprimPanier(Request $request){

        $orderId = $request->session()->get('panier');
        $basket = Order::find($orderId);
        $basket->products()->detach();
        $basket->delete();
        $request->session()->forget('panier');

        return view ('basket.delete', ['panierSupp' => $orderId]);
    }

    public function updateQty($orderId, Request $request)
    {
        $basket = Order::find($orderId);
        $products=$basket->products;
        $noMaj = [];
        foreach ($products as $keyPrd => $product) {
            if ($product->stock < $request->get('quantity')[$product->id]) {
                array_push($noMaj, $product->id);
            } else {
                $basket->products()->detach($product->id);
                $basket->products()->attach($product->id, ['quantity' => $request->get('quantity')[$product->id]]);
            }
        }
        Session::put([ 'noMaj' => $noMaj]);

        return redirect(route('basket'));
    }

    public function panier(Request $request){

        $basketId = $request->session()->get('panier');
        $basket = Order::find($basketId);

        $noMajs = $request->session()->get('noMaj');
        $request->session()->forget('noMaj');

        return view ('basket.index', ['panier' => $basket], ['noMajs' => $noMajs]);
    }

    public function validation(Request $request){

        $basket = Order::find($request->get('validate'));
        $basket->status = 'V';
        $basket->save();

        $orderId = $request->session()->get('panier');
        $request->session()->forget('panier');

        return view('basket.validate', ['orderId' => $orderId]);
      }

}