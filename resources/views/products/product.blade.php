@extends('master')

@section('title')

@endsection

@section('content')


    <div class="article">
        <h1>fiche produit</h1>
        {{$produit->name}}<br>
        {{number_format((($produit -> price)/100), 2, ',', ' '). '€'}}
        <img src="{{asset('image/'.$produit -> imgUrl)}}" alt="{{asset('image/'.$produit -> imgUrl)}}" class="photo">
        {{$produit->description}}<br>
    </div>







@endsection