@extends('layout.cart')

@section('content')
    <?php
        use App\Http\Controllers\CartController;
        $NbreProduct = 0;
        $Total = 0;
        if(Auth::check()) {
            $NbreProduct = CartController::cartItem();
            $Total = CartController::totalProduct();
            $NbreArticle = CartController::cartItemQte(); 
        }
    ?>
    <main class="panier">
        <div class="container-panier">
            <div class="title"> Panier </div>
            @if ($Products->isempty())
                <div class="message">
                    <div class="alert-danger">
                        Votre Panier est vide.
                    </div>
                </div>
            @else
                <div class="Cart-product-items">
                    <div class="row">
                        <div class="col-8">
                            <div class="d-flex">
                                <div class="title-col"> Shopping Cart </div>
                                <div class="cart-item">
                                    {{ $NbreProduct }} Products
                                </div>
                            </div>
                            <hr>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="bg-light">
                                        <tr>
                                            <th class="th-xxl"> détails du produit </th>
                                            <th class="th-sm"> Prix </th>
                                            <th class="th-sm"> Quantité </th>
                                            <th class="th-sm"> Total </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Products as $item)
                                            <tr>
                                                <td> 
                                                    <div class="product-img">
                                                        <img src="{{ url('./Uploads/' . $item->photo) }}" class="img-fluid" alt="{{ $item->name }}">
                                                    </div>
                                                    <div>
                                                        <div class="name">
                                                            {{ $item->name }}
                                                        </div>
                                                        <div class="category">
                                                            {{ $item->category }}
                                                        </div>
                                                        <div class="author">
                                                            {{ $item->author }}
                                                        </div>
                                                        <div class="remove">
                                                            <a href="removeProductFromCart/{{ $item->product_id }}" class="close">
                                                                <ion-icon name="trash"></ion-icon>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ $item->price }} MAD
                                                </td>
                                                <td>
                                                    {{ $item->quantite }}
                                                </td>
                                                <td>
                                                    {{ $item->quantite * $item->price }} MAD 
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="title-col"> Récapitulatif de la commande </div>
                            <br>
                            <div class="d-flex">
                                <div class="first-col"> {{ $NbreArticle }} Article </div>
                                <div class="second-col"> {{ $Total }} MAD </div> 
                            </div>
                            @if($Total >= 500)
                                <div class="d-flex">
                                    <div class="first-col"> Livraison </div>
                                    <div class="second-col"> Gratuit </div> 
                                </div>
                            @else
                                <br>
                                <div class="d-flex">
                                    <div class="first-col"> Livraison </div>
                                    <div class="second-col"> 30 MAD </div> 
                                </div>
                            @endif
                            <hr class="active-hr">
                            <div class="d-flex">
                                <div class="first-col"> Total </div>
                                <div class="second-col"> {{ $Total }} MAD </div> 
                            </div>
                            <div>
                                <br>
                                <a href="/order" target="_blank" class="btn"> <span></span> Checkout Order </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <a href="/" class="lien-redirect">
                <ion-icon name="arrow-dropleft-circle"></ion-icon>
                Continiez mes Achats
            </a>
        </div>
    </main>
@endsection
