<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> LUS-Book </title>
    <!-- All Css Files -->
    <link 
        rel="stylesheet" 
        href="{{ url('./Scss/main.css') }}"
    />
    <link 
        rel="stylesheet" 
        href="{{ url('./slick/slick.css') }}"
    />
    <link 
        rel="stylesheet" 
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" 
    />
</head>
<body class="wave-animation">
    {{ View::make('./layout/navbar')}}
    <main>
        @yield('content')
    </main>
    {{ View::make('./layout/footer')}}
    {{ View::make('./layout/alertPopup')}}
    <a class="scrolTopBtn"> <i class="fa-solid fa-angle-up"></i> </a>
    
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