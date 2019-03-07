@extends('master')

@section('title')

@endsection

@section('content')

    <h1>fiche produit</h1>

    {{$produit['nom']}}</br>
    {{$produit['description']}}</br>
    {{$produit['prix']}}

@endsection