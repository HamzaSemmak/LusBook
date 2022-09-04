@extends('layout.dashboard')

@section('content')
    <main class="fiche-product">
        <div class="container">
            <div class="categorie">
                
            </div>
            <div class="row">
                <div class="col-5">
                    <img src="{{ url('./Uploads/' . $Product['photo']) }}" class="img-fluid" alt="{{ $Product['name'] }}">
                </div>
                <div class="col-7">
                    <h1 class="product-name">
                        {{ $Product['name'] }}
                    </h1>
                    <div class="product-author">
                        {{ $Product['author'] }}
                    </div>
                    <div class="product-price">
                        {{ $Product['price'] }} MAD
                    </div>
                    <div class="description">
                        <span class="title-description"> RESUME :</span>
                        <br>
                        {{ $Product['description'] }}.
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
 