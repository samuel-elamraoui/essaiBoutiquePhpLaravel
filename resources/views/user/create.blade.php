@extends('master')

@section('title')
    Formulaire création d'utilisateur
@endsection

@section('content')

    <h1>Formulaire création d'utilisateur</h1>
    <form method="post" action={{route('userCreate')}}>
        {{csrf_field()}}
       <label>votre nom</label> : <input type="text" name="nom"/>
        <label>votre prenom</label> : <input type="text" name="prenom"/>
        <label>votre email</label> : <input type="email" name="email"/>
        <label>votre mot de passe</label> : <input type="password" name="pass" />


    </form>


@endsection