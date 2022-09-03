@extends('layout.master')

@section('content')
<section>
    <div class="authentification">
        <div class="card-body">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <div class="title">
                    Réinitialiser le mot de passe
                </div>
                <input type="hidden" name="token" value="{{ $token }}">
                <div>
                    <label> E-mail <span class="red-marque">*</span> </label>
                    <input id="email" type="email" class="form-control" placeholder="E-mail" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="msg-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label> Mot de passe <span class="red-marque">*</span></label>
                    <input id="password" type="password" class="form-control" placeholder="Mot de passe " name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="msg-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label>Confirm Mot de passe</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div>
                    <button type="submit" class="btn">
                        <span></span>
                        réinitialiser le mot de passe
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
