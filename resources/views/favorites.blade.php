@extends('layout.master')

@section('content')
    <main class="Favorites">
        <div class="container">
            <div class="mini-title">
                Accueil / Favorites
            </div>
            <div class="section-one">
                <div class="title"> Favorites </div>
            </div>
            @if ($Products->isempty())
                <div class="message">
                    <div class="alert-danger">
                        La liste des favorites est vide.
                    </div>
                </div>
            @else
                <div class="Product">
                    @foreach ($Products as $item)
                        <div class="card">
                            <a href="/fiche-product/{{ $item->product_id }}">
                                <div class="img-card">
                                    <img src="{{ url('./Uploads/' . $item->photo) }}" class="img-fluid" alt="{{ $item->name }}">
                                </div>
                                <div class="card-title">
                                    {{ $item->name }}
                                    <span>
                                        {{ $item->author }}
                                    </span>
                                </div>
                                <div class="card-price">
                                    {{ $item->price }} MAD 
                                </div>
                                <div class="close">
                                    <a href="removeProductFromFavorite/{{ $item->product_id }}">
                                        <ion-icon name="trash"></ion-icon>
                                    </a>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </main> 
@endsection