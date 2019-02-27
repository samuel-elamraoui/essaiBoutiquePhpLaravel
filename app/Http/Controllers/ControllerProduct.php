<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerProduct extends Controller
{
    function index () {
        return view('produit');
    }
};


