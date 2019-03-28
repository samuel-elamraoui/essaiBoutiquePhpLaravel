@extends('masterAdmin')

@section('title')
   modifier un  produit
@endsection

@section('content')

    <h1>Formulaire de mise à jour d'un produit</h1>
<diV>



</diV>
    <form>
        <div>

            <label for="namePrd">Nom du produit</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$produit->name}}">

            <label for="pricePrd">Prix </label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{number_format((($produit -> price)/100), 2, ',', ' '). '€'}}">

            <label for="desc">Description</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="{{$produit->description}}">

        </div>

    </form>

@endsection
