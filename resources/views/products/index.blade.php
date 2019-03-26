
    @extends($content)


@section('title')
Catalogue
@endsection

@section('content')


    <h1>Catalogue</h1>



    <p>Classement par : </p>
    <div class="article">
        <a href="/produit?sort=price&order=asc"><button type="button">Prix croissant</button> </a>
        <a href="/produit?sort=price&order=desc"><button type="button">Prix décroissant</button> </a>
        <a href="/produit?sort=name&order=asc"><button type="button">Nom</button> </a>
        @if ($content == 'masterAdmin')
            <a href="/admin/produit/creer"><button type="button">Créer nouveau</button> </a>
        @endif
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
                @if ($content == 'master')
                    <a href="{{route('addPrd',$produit->id)}}" class="article"> Ajouter </a>
                @else
                    <a href="{{route('destroy',$produit->id)}}" class="article"> Supprimer </a>
                    <a href="{{route('edit',$produit->id)}}" class="article"> Modifier produit </a>
                @endif

               {{--<a href="{{route('mise a jour',$produit->id)}}" class="border border-dark test"> Details </a>--}}
            </div>

        <br>
    @endforeach



@endsection
