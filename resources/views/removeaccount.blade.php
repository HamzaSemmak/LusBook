@extends('layout.master')

@section('content')
<div class="section-image-text">
    <div class="row">
        <div class="col-6 img-field">
            <img src="{{ url('./Image/undraw_throw_away_re_x60k.svg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-6 text-field">
            <div class="title"> Supprimer votre compte </div>
            <div class="text">
                Êtes-vous sûr?
                <p>
                    Une fois que vous confirmez. toutes les données de votre compte seront définitivement supprimées.
                </p>
            </div>
            <div>
                <a href="/deleteaccount/{{ Auth::user()->id }} " class="btn"> <span></span> Confirmer </a>
                &nbsp;
                <a href="/home" class="btn"> <span></span> Annuler </a>
            </div>
        </div>
    </div>
</div>
@endsection

