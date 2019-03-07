@extends('master')

@section('title')
   produit
@endsection

@section('content')

        <h1>mon produit</h1>
        @if(isset($produit))
            {{$produit}}
        @endif
@endsection
