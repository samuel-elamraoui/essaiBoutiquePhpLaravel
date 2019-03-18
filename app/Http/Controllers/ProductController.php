<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Productlist;


class ProductController extends Controller
{

    public function index()
    {
        $products = productlist::all(); //requete pour afficher tous mes articles
        return view('products.index', ['produits' => $products]);
    }

    //fonction tri prix croissants
    public
    function indexPrix()
    {

        $products = productlist::orderby('prix', 'desc')->get();  // requete pour trier les produits par ordre croissant

        return view('products.index', ['produits' => $products]);
    }

     //fonction tri par nom
    public function indexNom()
    {

        $products = productlist::orderby('nom')->get();

        return view('products.index', ['produits' => $products]);
    }


    public function create()
    {
        return view('products.Add');
    }

    public function store(Request $request)
    {
        $product=new Productlist;
        $product->nom=$request->nom;
        $product->prix=$request->prix;
        $product->image=$request->image;
        $product->description=$request->description;
        $product->save();
//
        return redirect('\produit');
    }

    public function show($id)
    {
        $detail = productlist::find($id);
        return view('products.product', ['produit' => $detail]);
    }


    public function update()
    {
        return view('products.Update');
    }


    public function destroy($id)
    {
        $product= Productlist::find($id);
        $product->delete();
        return redirect('/produit');
    }

}


