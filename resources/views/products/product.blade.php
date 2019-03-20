@extends('master')

@section('title')

@endsection

@section('content')

    <h1>fiche produit</h1>
<div class="article">

    {{$produit->name}}</br>
    {{$produit->description}}</br>
    {{$produit->price/100}} €</br>
    {{asset('image/'.$produit -> imgUrl)}}</div>







@endsection