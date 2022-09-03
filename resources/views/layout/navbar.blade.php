<?php
    use App\Http\Controllers\CartController;
    $NbreProduct = 0;
    if(Auth::check()) {
        $NbreProduct = CartController::cartItem();
    }
?>
<nav id="navbar">
    <div class="topbar" id="topBar">
        <div class="content">
            <div></div>
            <div class="text">
                Livraison Gratuite en Maroc à partir de 300 MAD
            </div>
            <div class="close" id="closeToBar">
                <ion-icon name="close"></ion-icon>
            </div>
        </div>
    </div>
    <div class="navbar container" id="navBarBottom">
        <a href="/" class="logo">
            <ion-icon name="planet"></ion-icon>
            <span> LusBook </span>
        </a>

        <div class="navbar-nav">
            <div class="nav-item">
                <a href="/nouveautes" class="nav-link"> NOUVEAUTÉS </a>
            </div>
            <div class="nav-item">
                <a href="/categorie/Histoire" class="nav-link"> Histoire </a>
            </div>
            <div class="nav-item">
                <a href="/categorie/Voyage" class="nav-link"> Voyage </a>
            </div>
            <div class="nav-item">
                <a href="/categorie/Droit" class="nav-link"> Droit </a>
            </div>
            <div class="nav-item">
                <a href="/categorie/Affaires" class="nav-link"> Affaires </a>
            </div>
            <div class="nav-item">
                <a href="/categorie/Science" class="nav-link"> Science </a>
            </div>
            <div class="nav-item">
                <a href="/categorie/Finance" class="nav-link"> Finance </a>
            </div>
            <div class="nav-item">
                <a href="/categorie/Sport" class="nav-link"> Sport </a>
            </div>
            <div class="nav-item">
                <a href="/categorie/Manga" class="nav-link"> Manga </a>
            </div>
            <div class="nav-item">
                <a href="/favorites" class="nav-link"> favorites </a>
            </div>
            <div class="nav-item">
                <a href="/contact" class="nav-link"> contact </a>
            </div>
        </div>

        <div class="nav-icons">
            <div class="nav-item">
                <a href="#" class="nav-link"> 
                    <ion-icon name="search" id="openSerachBar"></ion-icon> 
                </a>
            </div>
            <div class="nav-item">
                <a href="{{ route('home') }}" class="nav-link"> 
                    <ion-icon name="person"></ion-icon>
                </a>
            </div>
            <div class="nav-item">
                <a href="/cart" class="nav-link"> 
                    <ion-icon name="cart"></ion-icon>
                    {{ $NbreProduct }}
                </a>
            </div>
            &nbsp;
            <div class="navigation">
                <input type="checkbox" class="toggle-menu">
                <div class="hamburger"></div>
                <div class="menu">
                    <div class="nav-item">
                        <a href="/nouveautes" class="nav-link"> NOUVEAUTÉS </a>
                    </div>
                    <div class="nav-item">
                        <a href="/categorie/Histoire" class="nav-link"> Histoire </a>
                    </div>
                    <div class="nav-item">
                        <a href="/categorie/Voyage" class="nav-link"> Voyage </a>
                    </div>
                    <div class="nav-item">
                        <a href="/categorie/Droit" class="nav-link"> Droit </a>
                    </div>
                    <div class="nav-item">
                        <a href="/categorie/Affaires" class="nav-link"> Affaires </a>
                    </div>
                    <div class="nav-item">
                        <a href="/categorie/Science" class="nav-link"> Science </a>
                    </div>
                    <div class="nav-item">
                        <a href="/categorie/Finance" class="nav-link"> Finance </a>
                    </div>
                    <div class="nav-item">
                        <a href="/categorie/Manga" class="nav-link"> Manga </a>
                    </div>
                    <div class="nav-item">
                        <a href="/categorie/Sport" class="nav-link"> Sport </a>
                    </div>
                    <div class="nav-item">
                        <a href="/favorites" class="nav-link"> favorites </a>
                    </div>
                    <div class="nav-item">
                        <a href="/contact" class="nav-link"> contact </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
{{ View::make('./layout/searchBar')}}
