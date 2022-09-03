@extends('layout.master')

@section('content')
    <section>
        <div class="authentification">
            @if (session('status'))
                <div class="msg-danger" role="alert">
                    {{ session('status') }}
                </div>
            @endif
    
            <form method="POST" action="{{ route('password.email') }}">
                <div class="title">
                    Réinitialiser le mot de passe
                </div>
                @csrf
                <div>
                    <label> E-mail <span class="red-marque">*</span></label>
                    <input id="email" type="email" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="msg-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">
                        <span></span>
                        Envoyer le mot de passe
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
