@extends('layout.master')

@section('content')
    <main class="search">
        <div class="container">
            <h1 class="titre">  Résultats de la recherche : </h1>
            @if ($Product->isEmpty())
                <div class="message">
                    <div class="alert-danger">
                        Désolé, rien trouvé pour "{{ $query }}". Découvrez d'autres articles dans notre magasin.
                    </div>
                </div>
            @else
                <div class="Product">
                    @foreach ($Product as $item)
                        <div class="card">
                            <a href="/fiche-product/{{$item['id']}}">
                                <div class="img-card">
                                    <img src="{{ url('./Uploads/' . $item['photo']) }}" class="img-fluid" alt="{{ $item['name'] }}">
                                </div>
                                <div class="card-title">
                                    {{ $item['name'] }}
                                </div>
                                <div class="card-price">
                                    {{ $item['price'] }} MAD 
                                </div>
                                <div class="Favorites">
                                    <form action="/AddToFavorite" method="POST">
                                        @csrf
                                        <input type="hidden" name="Product_id" value="{{ $item['id'] }}">
                                        <button> <i class="fa-regular fa-heart"></i> </button>
                                    </form>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </main>
@endsection