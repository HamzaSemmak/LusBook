@extends('layout.master')

@section('content')
    <?php 
        use App\Http\Controllers\CategoryController;
        use App\Http\Controllers\FavoritesController;
        $droit = '';
        $sport = '';
        $Histoire = '';
        $Voyage = '';
        $droit = CategoryController::getCategorie('Droit');
        $sport = CategoryController::getCategorie('Sport');
        $Histoire = CategoryController::getCategorie('Histoire');
        $Voyage = CategoryController::getCategorie('Voyage');
    ?>
    {{ View::make('./layout/header')}}
    <main class="home-page">
        <div class="container">
            <div class="section-title">
                <span class="title"> NOUVEAUTÉS </span>
                <a href="/nouveautes" class="link-page">
                    Voir Tout 
                    <span class="dots-slick">  </span>
                </a>
            </div>
            <div class="Product multiple-items">
                @foreach ($products as $item)
                    <div class="card">
                        <a href="/fiche-product/{{$item['id']}}">
                            <div class="img-card">
                                <img src="./Uploads/{{ $item['photo'] }}" class="img-fluid" alt="{{  $item['photo'] }}">
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
            <div class="section-image-text">
                <div class="row">
                    <div class="col-6 img-field">
                        <img src="{{ url('./Image/undraw_bibliophile_re_xarc.svg') }}" class="img-fluid" alt="">
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
            <section>
                <div class="section-title">
                    <span class="title"> Droit </span>
                    <a href="/categorie/Droit" class="link-page">
                        Voir Tout 
                        <span class="dots-slick">  </span>
                    </a>
                </div>
                <div class="Product multiple-items">
                    @foreach ($droit as $item)
                        <div class="card">
                            <a href="/fiche-product/{{$item['id']}}">
                                <div class="img-card">
                                    <img src="{{ url('./Uploads/' . $item['photo'] ) }}" class="img-fluid" alt="{{ $item['name'] }}">
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
            </section>
            <br>
            <section>
                <div class="section-title">
                    <span class="title"> Sport </span>
                    <a href="/categorie/Sport" class="link-page">
                        Voir Tout 
                        <span class="dots-slick">  </span>
                    </a>
                </div>
                <div class="Product multiple-items">
                    @foreach ($sport as $item)
                        <div class="card">
                            <a href="/fiche-product/{{$item['id']}}">
                                <div class="img-card">
                                    <img src="{{ url('./Uploads/' . $item['photo'] ) }}" class="img-fluid" alt="{{ $item['name'] }}">
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
            </section>
            <br>
            <div class="section-image-text">
                <div class="row">
                    <div class="col-6 text-field">
                        <div class="title"> Le livre est un fenêtre sur le monde </div>
                        <div class="text">
                            réveillez votre rêve en lisant un livre tous les jours
                        </div>
                        <div>
                            <a href="/nouveautes" class="btn"> <span></span> Voir Tout </a>
                        </div>
                    </div>
                    <div class="col-6 img-field">
                        <img src="{{ url('./Image/undraw_bookshelves_re_lxoy.svg') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <section>
                <div class="section-title">
                    <span class="title"> Histoire </span>
                    <a href="/categorie/Histoire" class="link-page">
                        Voir Tout 
                        <span class="dots-slick">  </span>
                    </a>
                </div>
                <div class="Product multiple-items">
                    @foreach ($Histoire as $item)
                        <div class="card">
                            <a href="/fiche-product/{{$item['id']}}">
                                <div class="img-card">
                                    <img src="{{ url('./Uploads/' . $item['photo'] ) }}" class="img-fluid" alt="{{ $item['name'] }}">
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
            </section>
            <section>
                <div class="section-title">
                    <span class="title"> Voyage </span>
                    <a href="/categorie/Voyage" class="link-page">
                        Voir Tout 
                        <span class="dots-slick">  </span>
                    </a>
                </div>
                <div class="Product multiple-items">
                    @foreach ($Voyage as $item)
                        <div class="card">
                            <a href="/fiche-product/{{$item['id']}}">
                                <div class="img-card">
                                    <img src="{{ url('./Uploads/' . $item['photo'] ) }}" class="img-fluid" alt="{{ $item['name'] }}">
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
            </section>
        </div>
    </main> 
@endsection 