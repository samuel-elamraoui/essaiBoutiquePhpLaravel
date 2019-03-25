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


    {{--{{$produit->name}}</br>--}}
    {{--{{$produit->description}}</br>--}}
    {{--{{$produit->price/100}} €</br>--}}
    {{--{{asset('image/'.$produit -> imgUrl)}}</div>--}}


    <h1>LES STOCK</h1>

    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: {{$produit->stock}}%;" aria-valuenow="{{$produit->stock}}" aria-valuemin="0" aria-valuemax="100">{{$produit->stock}} / 100</div>
    </div>


@endsection