@extends('layout.master')

@section('content')
    <section>
        <div class="authentification">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="redirect">
                    <h1 class="title"> Pas de compte ? Créez-en un </h1>
                    <br>
                    <a href="/register" class="btn"> <span></span> Créez votre compte </a>
                </div>
                <h1 class="title"> Connectez-vous à votre compte </h1>
                <div>
                    <label> E-mail  <span class="red-marque">*</span> </label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="msg-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label> Mot de passe <span class="red-marque">*</span> </label>
                    <input id="password" type="password" class="form-control" placeholder="Mot de passe" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="msg-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- <div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div> --}}
                <div>
                    <button type="submit" class="btn">
                        <span></span>
                        &nbsp;&nbsp;
                        {{ __('Login') }}
                        &nbsp;&nbsp;
                    </button>
                </div>
                <div>
                    @if (Route::has('password.request'))
                        <a class="exep" href="{{ route('password.request') }}">
                            Mot de passe oublié ?
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </section>
@endsection
