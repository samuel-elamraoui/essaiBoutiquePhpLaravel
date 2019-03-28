@extends('master')

@section('title')
    Formulaire création d'utilisateur
@endsection

@section('content')
{{--    @dd($userComplet)--}}
    @php($user = $userComplet[0])
    @php($customer = $userComplet[1])
    @php($adress = $userComplet[2])

    <h1>Formulaire</h1>
    <form method="post" action={{route('userUpdating', $user->id)}}>
        @csrf
        <h2>User</h2>

        <label for="last_name">votre pseudo : </label>
        <input type="text" id="name" name="name" value="{{$user->name}}"/><br/>

        <h2>Client :</h2>

        <label for="last_name">votre nom : </label>
        <input type="text" id="last_name" name="last_name" value="{{$customer->last_name}}"/><br/>
        <label for="first_name">votre prenom : </label>
        <input type="text" id="first_name" name="first_name" value="{{$customer->first_name}}"/><br/>

        <h2>Adresse</h2>

        <label for="num_street">numéro : </label>
        <input type="text" id="num_street" name="num_street" value="{{$adress->num_street}}"/><br/>
        <label for="street">rue : </label>
        <input type="text" id="street" name="street" value="{{$adress->street}}"/><br/>
        <label for="comp">complement : </label>
        <input type="text" id="comp" name="comp" value="{{$adress->comp}}"/><br/>
        <label for="zip_code">code postal : </label>
        <input type="text" id="zip_code" name="zip_code"value="{{$adress->zip_code}}"/><br/>
        <label for="city">ville : </label>
        <input type="text" id="city" name="city" value="{{$adress->city}}"/><br/>
        <label for="country">Pays : </label>
        <input type="text" id="country" name="country" {{$adress->country}}/>

        <button type="submit" name="user_id" value="{{$user->id}}">Mettre à jour</button>

    </form>


@endsection