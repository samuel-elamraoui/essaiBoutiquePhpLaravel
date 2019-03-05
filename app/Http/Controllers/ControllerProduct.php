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

        $vintage = array (
            'nom' => 'lunettes vintages',
            'prix' => 150,
            'photo' => 'lunette1.jpg');


        $classique = array (
            'nom' => 'lunettes classiques',
            'prix' => 120,
            'photo' => 'lunette2.png');


        $chic = array (
            'nom' => 'lunettes chic',
            'prix' => 210 ,
            'photo' => 'lunette3.jpg');

        $Lunettes=[$chic,$classique,$vintage];


        return view('products.index',['liste'=>$Lunettes]);
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


