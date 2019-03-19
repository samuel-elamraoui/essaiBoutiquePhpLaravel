@extends('master')

@section('title')
Catalogue
@endsection

@section('content')



    <div>

    @foreach($produits as $produit)
            <div class="article">
                {{$produit->nom}}<br>
                {{$produit->prix}}€<br>
                {{$produit->image}}<br>
                {{$produit->description}}<br>
                {{$produit->created_at}}<br>
                {{$produit->updated_at}}


                <a href="{{route('fiche',$produit->id)}}" > Details </a>
                <a href="{{route('destroy',$produit->id)}}" > supprimer </a>
               {{--<a href="{{route('mise a jour',$produit->id)}}" class="border border-dark test"> Details </a>--}}
            </div>

        <br>
    @endforeach
    </div>


@endsection
