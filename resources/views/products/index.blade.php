@extends('master')

@section('title')
Catalogue
@endsection

@section('content')

    <h1>Catalogue</h1>

    @foreach($liste as $lunette )
        <p>{{$lunette["nom"]}}</p></br>
        <p>{{$lunette["prix"]}}</p></br>

        @endforeach

