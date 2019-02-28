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

        return view('products.AddProduct');
    }

    public function Store()
    {
        return view('products.SaveNewProduct');
    }

    public function Show($productID)
    {
        return view('products.ViewProduct',['produit'=>$productID]);
    }
    public function Edit()
    {
        return view('products.EditProduct');
    }
    public function Update()
    {
        return view('products.UpdateProduct');
    }

    public function Destroy()
    {
        return view('products.DeleteProduct');
    }

}


