<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\productlist;

class ProductController extends Controller
{

    public function index()
    {
        //  $products=DB::select('select* from products');
        // dd($products);
        $products = productlist::all(); //requete pour afficher tous mes articles
        //  $products=productlist::where('ID_category', 1)->get(); //requete pour afficher les articles d'une categorie precise
        return view('products.index', ['produits' => $products]);
    }


    public
    function indexPrix()
    {

        $products = productlist::orderby('prix', 'desc')->get();  // requete pour trier les produits par ordre croissant

        return view('products.index', ['produits' => $products]);
    }


    public function indexNom()
    {

        $products = productlist::orderby('nom')->get();

        return view('products.index', ['produits' => $products]);
    }


    public function create()
    {

        return view('products.Add');
    }

    public function store()
    {
        return view('products.SaveNew');
    }

    public function show($id)
    {
        // $detail=DB::select('select* from products where ID_prod=?',[$productID]);
        $detail = productlist::find($id);
        return view('products.product', ['produit' => $detail]);
    }

    public function edit()
    {
        return view('products.Edit');
    }

    public function update()
    {
        return view('products.Update');
    }

    public function destroy()
    {
        return view('products.Delete');
    }

}


