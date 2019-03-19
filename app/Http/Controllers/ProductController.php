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

        $products = productlist::orderby('price', 'desc')->get();  // requete pour trier les produits par ordre croissant

        return view('products.index', ['produits' => $products]);
    }

     //fonction tri par nom
    public function indexNom()
    {

        $products = productlist::orderby('name')->get();

        return view('products.index', ['produits' => $products]);
    }


    public function create()
    {
        return view('products.Add');
    }

    public function store(Request $request)
    {
        $product=new Productlist;

        $product->name=$request->name;
        $product->price=$request->price;
        $product->imgUrl=$request->imgUrl;
        $product->description=$request->description;
        $product->poid=$request->weight;
        $product->stock=$request->stock;
        $product->idCategory=$request->prd_category_id;
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


