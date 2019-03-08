@extends('master')

@section('title')
    Nouveau produit
@endsection

@section('content')
<header>
<h1>Formulaire de création</h1>
</header>


    <form method ="post" action={{route('addProd')}}>
{{csrf_field()}}
<div >
    <div class="form-group">
        <label>nom du produit</label>
        <input type="text" class="form-control" name="nom" placeholder="nom">
    </div>
    {{--<label>nom du nouveau produit</label> : <input type="text" name="nom"/>--}}
    <div class="form-group">
        <label>prix du produit</label>
        <input type="number" class="form-control" name="prix" placeholder="prix">
    </div>
        {{--<label>prix du nouveau produit</label> : <input type="number" name="prix">--}}
    <div class="form-group">
        <label>image produit</label>
        <input type="image" class="form-control" name="image" placeholder="image">
    </div>
        {{--<label>image du nouveau produit</label> : <input type="image" name="photo"--}}
    <div class="form-group">
        <label>description</label>
        <input type="text" class="form-control" name="description" placeholder="description">
    </div>
    <div class="form-group">
        <label>poid</label>
        <input type="number" class="form-control" name="poid" placeholder="poid">
    </div>
    <div class="form-group">
        <label>stock</label>
        <input type="number" class="form-control" name="stock" placeholder="stock">
    </div>
    <div class="form-group">
        <label>categorie</label>
        <input type="text" class="form-control" name="ID_category" placeholder="ID_category">
    </div>
        {{--<label>categorie</label> : <input type="number" name="categorie">--}}

    <p>
        <input type="submit" value="Envoyer" />
    </p>


</div>






    </form>



@endsection

