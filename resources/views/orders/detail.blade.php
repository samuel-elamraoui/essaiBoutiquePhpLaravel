@extends('masterAdmin')

@section('title')
    Détail commande
@endsection

@section('content')

    {{--@dump($order)--}}
    <strong>Commande n° {{$order->id}} du {{$order->date_order}}</strong>
    @foreach($order->products as $product)
        ref produit : {{$product->id}}<br/>
        {{$product->name}}. disponibilité :  {{$product->stock}}<br/>
        quantité : {{$product->pivot->quantity}}
        Prix unitaire : {{number_format((($product->price)/100), 2, ',', ' '). '€' }}<br/>
        Total ligne : {{number_format((($product->pivot->quantity)*(($product->price)/100)), 2, ',', ' '). '€' }}<br/>
        ***<br/>
    @endforeach
    @if($order->status == 'P' && $order->date_order < $today)
        <a href="{{route('preDestroyOrder', $order->id)}}"><button type="submit" name="suppOrder" value="{{$order->id}}">Supprimer</button></a><br/>
    @endif


@endsection