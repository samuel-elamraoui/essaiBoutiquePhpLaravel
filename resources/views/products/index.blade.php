@extends('master')

@section('title')
Catalogue
@endsection

@section('content')


    <h1></h1>

    @foreach($produits as $produit)
        {{$produit->nom}}<br>
        {{$produit->prix}}<br>
        <a href="{{route('fiche',['productID'=>$produit->id])}}"> Details </a>
    @endforeach



@endsection
