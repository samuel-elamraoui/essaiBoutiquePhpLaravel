@extends('master')

@section('title')
    effacer le panier
@endsection

@section('content')

    <h1>panier n° {{$panierSupp}} supprimé,<a href="/produit"> retour à la liste des produits</a></h1>

@endsection