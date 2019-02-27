
@extends('master')

@section('title')

    Catalogue
@endsection

@section('content')

    <h1>Catalogue</h1>
    @if(isset($fromUrl))
        {{ $fromUrl }}
    @endif

@endsection