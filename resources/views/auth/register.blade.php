@extends('layout.master')

@section('content')
    <div class="authentification">
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1 class="title"> Créez votre compte </h1>
                <div class="redirect-text"> 
                    Vous avez déjà un compte ? 
                    <a href="/login"> Connectez-vous !</a> 
                </div>
                <br>
                <div>
                    <label> Prenom  <span class="red-marque">*</span> </label>
                    <input type="text" class="form-control" placeholder="Prenom" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                    @error('lastname')
                        <span class="msg-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label> Nom <span class="red-marque">*</span> </label>
                    <input type="text" class="form-control" placeholder="Nom" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                    @error('firstname')
                        <span class="msg-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label> Date Naiassance <span class="red-marque">*</span> </label>
                    <input type="date" class="form-control" name="datenaissance" value="{{ old('datenaissance') }}" required autocomplete="datenaissance" autofocus>
                    @error('datenaissance')
                        <span class="msg-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label>E-mail <span class="red-marque">*</span></label>
                    <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="msg-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label> Mot de passe </label>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Mot de passe" required autocomplete="new-password">
                    @error('password')
                        <span class="msg-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label>Confirmer Mot de passe <span class="red-marque">*</span> </label>
                    <input id="password-confirm" type="password" class="form-control" placeholder=" Mot de passe" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div>
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn">
                            <span></span>
                            &nbsp; &nbsp;
                            Enregistrer
                            &nbsp; &nbsp;
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
