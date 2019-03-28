<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use Illuminate\Database\Eloquent\Collection;
use Auth;


class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index' ,'show']);
    }

    public function index(Request $request)
    {


//        pour afficher la meme vue avec 2 pages differentes.
        $sort = "name";
        $order = "asc";
        if (null !== $request->get('sort') && (null !== $request->get('order'))) {
            $sort = $request->get('sort');
            $order = $request->get('order');
        }

        if ($request->path()== 'produit'){
            $content = 'master';
            $products = product::where('stock', '>',  0)->where('status', 'D')->orderby("$sort", "$order")->get();
        } else {
           $content = 'masterAdmin';
            $products = product::where('status', 'D')->orderby("$sort", "$order")->get();
        }

        return view('products.index', ['produits' => $products, 'content'=>$content]);
    }

    public function create()
    {
        return view('products.Add');
    }

    public function store(Request $request)
    {
        $product=new Product;

        $product->name=$request->name;
        $product->price=$request->price;
        $product->imgUrl=$request->imgUrl;
        $product->description=$request->description;
        $product->weight=$request->weight;
        $product->stock=$request->stock;
        $product->prd_category_id=$request->prd_category_id;
        $product->save();
//
        return redirect(route('adminProduit'));
    }

    public function show(Request $request, $id)
    {

        $product = Product::find($id);

        if ($request->path() == 'produit/'.$id){
            $content = 'master';
        } else {
            $content = 'masterAdmin';
        }

        return view('products.product', ['produit' => $product, 'content'=>$content]);
    }

    public function update()
    {
        return view('products.Update');
    }

    public function preDestroy($id)
    {
        $product= Product::find($id);
        return view('products.Delete', ['produit' => $product]);
    }

    public function destroy($id)
    {
        $product= Product::find($id);
        if (isset($product->orders[0])){
            $product->status = 'S';
            $product->save();
        } else {
            $product->delete();
        }

        return redirect(route('adminProduit'));
    }

    public function edit($id)
    {
        $produit = Product::find($id);
        return view('products.Edit', [
            'produit' => $produit]);
    }

}


