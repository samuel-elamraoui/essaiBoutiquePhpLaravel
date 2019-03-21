@extends('master')

@section('title')
    votre panier
@endsection

@section('content')

    <h1>Votre panier </h1>
    {{$panier->customer->last_name}} {{$panier->customer->first_name}}<br/>
    Panier n° {{$panier->id}} du {{$panier->date_order}}<br/>

    @foreach($panier->products as $product)
        <form action="{{route('suppLine')}}" method="post">
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
@endsection