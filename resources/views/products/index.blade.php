@extends('master')

@section('title')
Catalogue
@endsection

@section('content')



    <div class="row content">

    @foreach($produits as $produit)
            <div class="col-4 border border-warning test">
                {{$produit->nom}}<br>
                {{$produit->prix}}€<br>
                {{$produit->image}}<br>
                {{$produit->description}}<br>
                {{$produit->created_at}}<br>
                {{$produit->updated_at}}
                <a href="{{route('fiche',$produit->id)}}" class="border border-dark test"> Details </a>
                <a href="{{route('destroy',$produit->id)}}" class="border border-dark test"> supprimer </a>
                {{--<a href="{{route('',$produit->id)}}" class="border border-dark test"> Details </a>--}}
            </div>

        <br>
    @endforeach
    </div>


@endsection
