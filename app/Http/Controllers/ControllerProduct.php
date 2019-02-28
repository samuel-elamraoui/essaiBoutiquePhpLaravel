<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ControllerProduct extends Controller
{

    public function index()
    {
        return view('products.index');
    }

    public function Create (){

        return view('products.Add');
    }

    public function Store()
    {
        return view('products.SaveNew');
    }

    public function Show($productID)
    {
        return view('products.View',['produit'=>$productID]);
    }
    public function Edit()
    {
        return view('products.Edit');
    }
    public function Update()
    {
        return view('products.Update');
    }

    public function Destroy()
    {
        return view('products.Delete');
    }

}


