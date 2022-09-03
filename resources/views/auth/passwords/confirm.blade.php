@extends('layout.master')

@section('content')
<section>
    <div class="authentification">
        <div class="card-body">
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <div class="title">
                    Confirmez le mot de passe
                    <br>
                    Veuillez confirmer votre mot de passe avant de continuer.
                </div>
                <div>
                    <label>Mot de passe <span class="red-marque">*</span></label>
                    <input id="password" type="password" placeholder="Mot de passe" class="form-control" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="msg-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <div>
                        <button type="submit" class="btn">
                            <span></span>
                            Confirmez le mot de passe
                        </button>
                        @if (Route::has('password.request'))
                            <a class="btn" href="{{ route('password.request') }}">
                                <span></span>
                                Mot de passe oublié?
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
