<?php

namespace App\Http\Controllers;

use App\order_head;
use Illuminate\Http\Request;

class ControllerOrder extends Controller
{
    function search(){
        return view('orders.search');
    }

    function index (){

        $order_heads = order_head::all();


        return view('orders.index', ['order_heads' => $order_heads ]);
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
}
