@extends('layout.master')

@section('content')
    <main class="Paiement">
        <div class="container">
            <div class="title"> PAIEMENT SÉCURISÉ </div>
            <div class="row">
                <div class="col-6">
                    <img src="{{ url('./Image/custom-carte.svg') }}" class="im-fluid" alt="">
                    <div>
                        <div class="title"> Paiement par Carte Bancaire </div>
                        <div class="text">
                            Vous pourrez utiliser votre carte Carte Bleue, votre carte Visa ou votre carte Mastercard en toute sécurité. Le paiement est sécurisé grâce au système de protection et de cryptage SSL fourni par les services de PAYPLUG.
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <img src="{{ url('./Image/custom-paypal.svg') }}" class="im-fluid" alt="">
                    <div class="title"> Paiement par Paypal </div>
                    <div class="text">
                        Vous pouvez également payer en utilisant le service PayPal qui est 100% sécurisé.
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

