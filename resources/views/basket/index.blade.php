@extends('master')

@section('title')
    votre panier
@endsection

@section('content')

    @if(! $panier == null))
    <h1>Votre panier </h1>

    {{--*********en-tête du panier*********--}}
    {{$panier->customer->last_name}} {{$panier->customer->first_name}}<br/>
    Panier n° {{$panier->id}} du {{$panier->date_order}}<br/>

    {{--*********contenu du panier*********--}}
    @foreach($panier->products as $product)
        <form action="{{route('suppLine', $product->id)}}" method="post">
            @csrf
        <label for="{{$product->name}}">
            <div class="article">
                {{$product->name}}<br/>
                Prix unitaire : {{number_format((($product->price)/100), 2, ',', ' '). '€' }}
                quantité :
                <input type="number" min="1" id="{{$product->name}}" name="quantity" value="{{$product->pivot->quantity}}">
                 total : {{number_format((($product->pivot->quantity)*(($product->price)/100)), 2, ',', ' '). '€' }}
                <button type="submit" name="suppProduct" value="{{$product->id}}">Supprimer</button>
            </div>
        </label>
        </form>
    @endforeach

    {{--*********Supression panier*********--}}
    <form action="{{route('delBasket')}}" method="post">
        @csrf
        <button type="submit" name="suppBasket" value="{{$panier->id}}">Annuler panier</button>
    </form>

    {{--*********recalcul du panier*********--}}
    {{--<form action="{{route('basket')}}" method="post">--}}
        {{--@csrf--}}
        {{--<button type="submit" name="totalbasket"></button>--}}
    {{--</form>--}}

    @else
        <h1>Panier vide, <a href="/produit"> retour à la liste des produits</a></h1>
    @endif
@endsection