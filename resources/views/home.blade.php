@extends('layout.master')

@section('content')
    <?php
        use App\Http\Controllers\CartController;
        use App\Http\Controllers\FavoritesController;
        $NbreProduct = 0;
        $NbreFavorites = 0;
        if(Auth::check()) {
            $NbreFavorites = FavoritesController::NbreFavorites();
            $NbreProduct = CartController::cartItem();
        }
    ?>
    <main class="home">
        <div class="container">
            <div class="home-navbar">
                <span class="title"> Votre compte </span>
                <span class="user"> 
                    <ion-icon name="person"></ion-icon>
                    &nbsp;
                    {{ Auth::user()->name }} 
                </span>
            </div>
            <section>
                <div class="text">
                    Bienvenue sur votre page d'accueil. Vous pouvez y gérer vos informations personnelles ainsi que vos commandes.
                </div>
                <div class="content">
                    <div class="discount-card">
                        <a href="/donnéesPersonnelle">
                            <span class="icon">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <span class="title">
                                DONNÉES 
                                PERSONNELLES
                            </span>
                        </a>
                    </div>
                    <div class="discount-card">
                        <a href="/cart">
                            <span class="icon">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span> {{ $NbreProduct }}</span>
                            </span>
                            <span class="title">
                                Panier
                            </span>
                        </a>
                    </div>
                    <div class="discount-card">
                        <a href="/favorites">
                            <span class="icon">
                                <i class="fa-solid fa-heart"></i>
                                <span> {{ $NbreFavorites }}</span>
                            </span>
                            <span class="title">
                                Favorites
                            </span>
                        </a>
                    </div>
                    <div class="discount-card">
                        <a href="/myorders">
                            <span class="icon">
                                <i class="fa-solid fa-tag"></i>
                            </span>
                            <span class="title">
                                Mes commandes
                            </span>
                        </a>
                    </div>
                    <div class="discount-card">
                        <a href="/Retour">
                            <span class="icon">
                                <i class="fa-solid fa-arrow-right-arrow-left"></i>
                            </span>
                            <span class="title">
                                Retours Produits 
                            </span>
                        </a>
                    </div>
                    <div class="discount-card">
                        <a href="/livraison">
                            <span class="icon">
                                <i class="fa-solid fa-truck"></i>
                            </span>
                            <span class="title">
                                livraison des  Produit 
                            </span>
                        </a>
                    </div>

                    <div class="discount-card">
                        <a href="/contact">
                            <span class="icon">
                                <i class="fa-solid fa-address-book"></i>
                            </span>
                            <span class="title">
                                Contacter-nous 
                            </span>
                        </a>
                    </div>

                    <div class="discount-card">
                        <a href="/removeaccount">
                            <span class="icon">
                                <i class="fa-solid fa-user-xmark"></i>
                            </span>
                            <span class="title">
                                Supprimer votre compte  
                            </span>
                        </a>
                    </div>
            </section>
            <div class="home-navbar">
                <a href="/" class="lien">
                    <ion-icon name="arrow-dropleft-circle"></ion-icon>
                    Continiez mes Achats
                </a>
                <a class="lien">
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item lien" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            Se déconnecter 
                            &nbsp;
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </a>
            </div>
        </div>
    </main>
@endsection