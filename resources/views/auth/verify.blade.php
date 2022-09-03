@extends('layout.master')

@section('content')
<div class="authentification">
    <div class="redirect">
        <div class="title"> Vérifiez votre adresse e-mail </div>
    </div>
    <div>
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
        @endif
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <label>
                Avant de continuer, veuillez vérifier votre e-mail pour un lien de vérification.
                <br>
                Si vous n'avez pas reçu l'e-mail
            </label>
            <button type="submit" class="btn">
                <span></span>
                cliquez ici pour en demander un autre    
            </button>.
        </form>
    </div>
</div>
@endsection
