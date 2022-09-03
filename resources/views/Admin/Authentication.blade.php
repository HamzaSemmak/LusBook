<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Administrateur </title>
    <!-- All Css Files -->
    <link rel="stylesheet" href="{{ url('./Scss/main.css') }}">
</head>
<body class="light-body">
    <main class="login_admin">
        <div class="content">
            <div class="row">
                <div class="col-6">
                    <div class="logo">
                        <span>Con</span>nectez-vous
                    </div>
                    <form action="/dashboard" method="POST">
                        @csrf
                        <div>
                            <label> E-mail  <span class="red-marque">*</span> </label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="email" autofocus>
                            @error('email')
                                <span class="msg-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            <label> Mot de passe <span class="red-marque">*</span> </label>
                            <input id="password" type="password" class="form-control" placeholder="Mot de passe" name="password" autocomplete="current-password">
                            @error('password')
                                <span class="msg-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            @if(Session::has('fail'))
                            <div class="message">
                                <div class="alert-danger">
                                    {{Session::get('fail')}}
                                </div>
                            </div>
                        @endif
                        </div>
                        <div style="text-align: center;">
                            <button type="submit" class="btn">
                                <span></span>
                                &nbsp;&nbsp;
                                {{ __('Login') }}
                                &nbsp;&nbsp;
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-6">
                    <img src="{{ url('./Image/book.png') }}" class="img-fluid" alt="">
                    <div class="title">
                        LUS-Book 
                    </div>
                    <div class="text">
                        est une bibliothèque de plus de 100 livres,
                        Choisissez parmi les livres pub et Kindle, lisez-les en ligne. Vous trouverez ici la grande littérature mondiale, en mettant l'accent sur les œuvres plus anciennes pour lesquelles U.S. le droit d'auteur a expiré. Des milliers de bénévoles ont numérisé et relu avec diligence les livres, pour votre plus grand plaisir.
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- All Js Files -->
    <script src="{{ url('./js/main.js') }}"></script>
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