@extends('layout.master')

@section('content')
    <?php 
        use App\Http\Controllers\FavoritesController;
    ?>
    <main class="nouveautes">
        <div class="mini-title">
            Accueil / nouveautes 2022
        </div>
        <div class="container">
            <div class="section-one">
                <div class="title"> NOUVEAUTÉS </div>
                <div class="text">
                    Retrouvez ici les dernières nouveautés sélectionnées par LusBook.
                    De nombreux livres sont ajoutés chaque semaine. La livraison 
                    est gratuite en Maroc a partir de 300 MAD et nous expédions partout 
                    dans le monde.
                </div>
            </div>
            <div class="section-tow">
                <div class="Product Pagination-content">
                    @foreach ($Products as $item)
                        <div class="card">
                            <a href="/fiche-product/{{ $item->id }}">
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
                                <div class="Favorites">
                                    <?php 
                                        $Product_id = FavoritesController::checkFavorite($item->id);
                                    ?>
                                    @if ($Product_id == 1)
                                        <button> <i class="fa-regular fa-heart red-color"></i> </button>
                                    @else
                                        <form action="/AddToFavorite" method="POST">
                                            @csrf
                                            <input type="hidden" name="Product_id" value="{{ $item->id }}">
                                            <button> <i class="fa-regular fa-heart"></i> </button>
                                        </form>
                                    @endif
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection

