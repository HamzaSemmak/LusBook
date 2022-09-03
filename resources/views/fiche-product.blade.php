@extends('layout.master')

@section('content')
    <?php 
        use App\Http\Controllers\FavoritesController;
        use App\Http\Controllers\CartController;
    ?>
    <main class="fiche-product">
        <div class="container">
            <div class="categorie">
                Accueil 
                <i class="fa-solid fa-angle-right"></i> 
                {{ $Product['category'] }} 
                <i class="fa-solid fa-angle-right"></i>
                {{ $Product['name'] }}
            </div>
            <div class="row">
                <div class="col-5">
                    <img src="{{ url('./Uploads/' . $Product['photo']) }}" class="img-fluid" alt="{{ $Product['name'] }}">
                </div>
                <div class="col-7">
                    <h1 class="product-name">
                        {{ $Product['name'] }}
                    </h1>
                    <div class="product-author">
                        {{ $Product['author'] }}
                    </div>
                    <div class="product-price">
                        {{ $Product['price'] }} MAD
                    </div>
                    <div class="description">
                        <span class="title-description"> RESUME :</span>
                        {{ $Product['description'] }}.
                    </div>
                    <div>
                        <?php 
                            $Product_id = CartController::checkcart($Product['id']);
                        ?>
                        @if ($Product_id == 1)
                            <a href="/cart" class="btn" disabled> <span></span> Voir Panier </a>
                        @else
                            <div>
                                <form action="/AddToCart" class="d-flex" method="POST">
                                    @csrf
                                    <div class="quantite">
                                        <div class="btn-counter increase"> + </div> 
                                        <input type="text" readonly class="counter-result" name="quantite" value="1">
                                        <div class="btn-counter decrease"> - </div> 
                                    </div>
                                    <div>
                                        <input type="hidden" name="Product_id" value="{{ $Product['id'] }}">
                                        <button type="submit" class="btn"> <span></span> Ajouter au panier </button>
                                    </div>
                                </form>
                            </div>
                        @endif
                    </div>
                    <div class="ref-data">
                        <div>
                            <i class="fa-solid fa-truck"></i>
                            <span class="text">
                                Livraison gratuite en Maroc à partir de 300 MAD
                            </span>
                        </div>
                        <div>
                            <i class="fa-solid fa-clock"></i>
                            <span class="text">
                                Expédition le jour même jusqu'à 13h
                            </span>
                        </div>
                        <div>
                            <i class="fa-solid fa-lock"></i>
                            <span class="text">
                                Expédition le jour même jusqu'à 13h
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 30px">
            <div class="title"> VOUS AIMEREZ AUSSI </div>
            <br>
            <div class="Product multiple-items">
                @foreach ($productAssocies as $item)
                    <div class="card">
                        <a href="/fiche-product/{{$item['id']}}">
                            <div class="img-card">
                                <img src="{{ url('./Uploads/' . $item['photo']) }}" class="img-fluid" alt="{{ $Product['name'] }}">
                            </div>
                            <div class="card-title">
                                {{ $item['name'] }}
                                <span>
                                    {{ $item['author'] }}
                                </span>
                            </div>
                            <div class="card-price">
                                {{ $item['price'] }} MAD 
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
        <div class="container">
            <div class="section-image-text">
                <div class="row">
                    <div class="col-6 img-field">
                        <img src="{{ url('./Image/undraw_reading_book_re_kqpk.svg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-6 text-field">
                        <div class="title"> Pour l'amour de la lecture </div>
                        <div class="text">
                            Nous présentons ici une sélection de livres rares de notre boutique. De nouveaux articles sont ajoutés fréquemment, alors revenez souvent ! (Vous pouvez être averti lorsque nous téléchargeons de nouveaux livres en rejoignant notre liste de diffusion ici.)
                        </div>
                        <div>
                            <a href="/nouveautes" class="btn"> <span></span> Voir Tout </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
