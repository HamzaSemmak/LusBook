<?php
    use App\Http\Controllers\AdminController;
    $admin = 0;
    $admin = AdminController::getAdmin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#212529">
    <title> LUS-Book/Espace Admin </title>
    <!-- All Css Files -->
    <link 
        rel="stylesheet" 
        href="{{ url('./Scss/main.css') }}"
    />
    <link 
        rel="stylesheet" 
        type="text/css" 
        href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
</head>
<body class="dashboard-body">
    <div class="sidebar-dashboard">
        <div class="logo-content">
            <li class="logo">
                <a href="/" target="_blank">
                    <span class="icon-planet">
                        <ion-icon name="planet"></ion-icon> 
                    </span>
                    <span class="sidebar-link-name"> LusBook </span>
                </a>
            </li>
        </div>
        <ul class="sidebar-items">
            <li class="sidebar-link">
                <a href="/Admin">
                    <i class="fa-solid fa-arrow-trend-up"></i>
                    <span class="sidebar-link-name"> Dashboard </span>
                </a>
            </li>
            <li class="sidebar-link">
                <a href="/Products">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class="sidebar-link-name"> Produit </span>
                </a>
            </li>
            <li class="sidebar-link">
                <a href="/Users">
                    <i class="fa-regular fa-user"></i>
                    <span class="sidebar-link-name"> Users </span>
                </a>
            </li>
            <li class="sidebar-link">
                <a href="/contacts">
                    <i class="fa-solid fa-address-book"></i>
                    <span class="sidebar-link-name"> Contact </span>
                </a>
            </li>
        </ul>
    </div>
    <div class="dashboard-content">
        <div class="dashboard-navbar">
            <div>
                <i class="fa-solid fa-bars sidebar-dashboard-toggler"></i>
            </div>
            {{-- <form class="search-box" action="/search" role="search">
                <input name="query" type="text" placeholder="Rechercher Produit..." aria-label="search" class="search-txt" required>
                <button type="submit" class="search-btn"> <ion-icon name="search"></ion-icon> </button>
            </form> --}}
            <div class="admin-box">
                <div class="admin-name">
                    <img src="{{ url('./Image/face avatar.png') }}" alt="">
                    <span> {{ $admin }} </span> 
                </div>
            </div>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
    {{ View::make('./layout/alertPopup')}}

    <!-- All Js Files -->
    <script src="{{ url('./js/main.js') }}"></script>
    <script src="{{ url('./js/CountAPI.js') }}"></script>
    <script src="{{ url('./js/cart.js') }}"></script>
    <script src="{{ url('./js/invoice.js') }}"></script>
    <script src="{{ url('./js/accordion.js') }}"></script> 
    <script src="{{ url('./js/AdvancedSearchSidebar.js') }}"></script>
    <script src="{{ url('./js/toast.js') }}"></script>
    <script src="{{ url('./js/jQuery-cdn.js') }}"></script>
    <script src="{{ url('./js/jQuery.js') }}"></script>
    <script src="{{ url('./js/Dashboard.js') }}"></script>
    <script src="{{ url('./slick/slick.js') }}"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/f3c4ed9041.js" crossorigin="anonymous"></script> 
</body>
</html>