<?php

namespace App\Http\Controllers;

use App\Order;
use App\order_head;
use Illuminate\Http\Request;

class ControllerOrder extends Controller
{
    function search(){
        return view('orders.search');
    }

    function index (Request $request)
    {
        $sort = "id";
        $order = "desc";
        if (null !== $request->get('sort') && (null !== $request->get('order'))) {
            $sort = $request->get('sort');
            $order = $request->get('order');
        }
        $orders = Order::orderby("$sort", "$order")->get();
        return view('orders.list', ['orders' => $orders]);
    }

    function reorder (){
        return view('orders.reorder');
    }

    function cancel(){
        return view('orders.cancel');
    }

    function testUrl($orderId){
        return view('orders.index', ['fromUrl' => $orderId]);
    }

    function show($id){
        $commandes = Order::where('id', $id)->first();
//        dd($commandes->delivery_cost);
        return view('orders.index', ['order' => $commandes]);
    }
}
