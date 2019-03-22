@extends('masterAdmin')

@section('title')


@endsection

@section('content')
    <div class="acceuil">
    <h2>Bienvenue sur la section administrateur</h2>
    </div>
    <br>


    <div class="products">
        <button class="bouton">Gestion produit</button>

    </div><br>

    <div class="users">
        <button class="bouton">Gestion des utilisateurs</button>
    </div><br>

    <div class="order">
        <button class="bouton">Gestion des commandes</button>

    </div><br>

    <div class="category">
        <a href="/admin/category"> <button class="bouton">Gestion des catégories</button></a>
    </div>


@endsection