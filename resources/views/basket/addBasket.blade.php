@extends('master')

@section('title')
    ajputer au panier
@endsection

@section('content')

    <h1>Formulaire d'ajout au panier</h1>

    {{$panier->customer->last_name}} {{$panier->customer->first_name}}<br/>
    Panier n° {{$panier->id}} du {{$panier->date_order}}<br/>

    @foreach($panier->products as $product)
        Produit : {{$product->name}} quantité {{$product->pivot->quantity}} prix {{number_format(((($product->pivot->quantity)/100)*($product->price)), 2, ',', ' '). '€' }}
    @endforeach




@endsection