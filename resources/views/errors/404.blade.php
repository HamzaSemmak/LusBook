@extends('layout.master')

@section('content')
    <div class="page-404">
        <div class="container">
            <div class="section-image-text">
                <div class="row">
                    <div class="col-6 img-field">
                        <img src="{{ url('./Image/undraw_page_not_found_re_e9o6.svg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-6 text-field">
                        <div class="title"> Oops ! </div>
                        <div class="text">
                            404 page introuvable
                            <br>
                            NOUS SOMMES DÉSOLÉS MAIS LA PAGE QUE VOUS AVEZ DEMANDÉE N’A PAS ÉTÉ TROUVÉE.
                        </div>
                        <div>
                            <a href="/" class="btn"> <span></span> &nbsp; Page Acceuil &nbsp; </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection