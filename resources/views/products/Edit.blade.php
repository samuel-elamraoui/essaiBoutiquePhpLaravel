@extends('master')

@section('title')
   modifier un  produit
@endsection

@section('content')

    <h1>Formulaire de mise à jour d'un produit</h1>

    @foreach($products as $product)
    {{Form::text('nom', $product->nom,[required=>required]) }}
    {{Form::text('prix', )}}

@endsection
