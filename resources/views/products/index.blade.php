@extends('master')

@section('title')
Catalogue
@endsection

@section('content')


    <h1>Catalogue</h1>

<div class="cat">
    <a href="#" class="article"> Catégories </a>
</div>

    @foreach($produits as $produit)
            <div class="article">
                {{$produit->name}}<br>
                {{number_format((($produit -> price)/100), 2, ',', ' '). '€'}}
                <img src="{{asset('image/'.$produit -> imgUrl)}}" alt="{{asset('image/'.$produit -> imgUrl)}}" class="photo">
                {{$produit->description}}<br>
{{--                {{$produit->created_at}}<br>--}}
{{--                {{$produit->updated_at}}--}}
                <a href="{{route('fiche',$produit->id)}}" class="article"> Fiche produit </a>
                <a href="{{route('destroy',$produit->id)}}" class="article"> Supprimer </a>
                <a href="{{route('edit',$produit->id)}}" class="article"> Modifier produit </a>

               {{--<a href="{{route('mise a jour',$produit->id)}}" class="border border-dark test"> Details </a>--}}
            </div>

        <br>
    @endforeach



@endsection
