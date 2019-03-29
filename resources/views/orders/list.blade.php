@extends('masterAdmin')

@section('title')
    Gestion des commandes
@endsection

@section('content')
    <h1>Gestion des commandes</h1>
    <div class="article">
        <a href="/admin/commandes?sort=id&order=asc"><button type="button">ID croissant</button> </a>
        <a href="/admin/commandes?sort=id&order=desc"><button type="button">ID décroissant</button> </a>
        <a href="/admin/commandes?sort=date_order&order=asc"><button type="button">Date croissante</button> </a>
        <a href="/admin/commandes?sort=date_order&order=desc"><button type="button">Date décroissante</button> </a>
    </div>
    @foreach($orders as $order)
        @php($totalOrder=0)
        <div class="article">
            <strong>Commande n° {{$order->id}} du {{$order->date_order}} du client : {{$order->customer_id}}</strong>
            @foreach($order->products as $product)
                @php($totalOrder = $totalOrder + ($product->price) * ($product->pivot->quantity))
            @endforeach
            <strong> Total  : {{number_format(($totalOrder/100),2, ',', ' '). '€'}}</strong><br/>
            @if($from == 'Admin')
                <a href="{{route('detailOrder', $order->id)}}">
                    <button type="submit" name="detailOrder" value="{{$order->id}}">details</button><br/>
                </a>
            @else
                <a href="{{route('userDetailOrder', $order->id)}}">
                    <button type="submit" name="detailOrder" value="{{$order->id}}">details</button><br/>
                </a>
            @endif
            @if($order->status == 'P' && $order->date_order < $today)
                <a href="{{route('preDestroyOrder', $order->id)}}">
                    <button type="submit" name="suppOrder" value="{{$order->id}}">Supprimer</button>
                </a><br/>
            @endif
        </div>
    @endforeach

@endsection