@extends('master')

@section('title')

@endsection

@section('content')

    <h1>fiche produit</h1>
<div class="article">

    {{$produit->name}}<br>
    {{number_format((($produit -> price)/100), 2, ',', ' '). '€'}}
    <img src="{{asset('image/'.$produit -> imgUrl)}}" alt="{{asset('image/'.$produit -> imgUrl)}}" class="photo">
    {{$produit->description}}<br>
</div>







@endsection