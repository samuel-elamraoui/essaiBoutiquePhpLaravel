@extends('master')

@section('title')

@endsection

@section('content')

    <h1>fiche produit</h1>
<div class="article">

    {{$produit['nom']}}</br>
    {{$produit['description']}}</br>
    {{$produit['prix']}}</br>
    {{$produit['image']}}</br>
</div>







@endsection