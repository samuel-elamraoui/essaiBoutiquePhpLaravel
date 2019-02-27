
@extends('master')

@section('title')

    Hello World
@endsection

@section('content')

    <h1>Page accueil</h1>
    @if(isset($fromUrl))
        {{ $fromUrl }}
    @endif

@endsection