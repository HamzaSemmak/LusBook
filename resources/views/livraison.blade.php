@extends('layout.master')

@section('content')
    <main class="livraison">
        <div class="container">
            <div class="title"> LA LIVRAISON DE VOTRE COMMANDE </div>
            <div class="text">
                COVID-19 : nous continuons à expédier vos commandes quotidiennement.
            </div>
            <div class="group-card">
                <div class="livraison-card"> 
                    <div class="card-title">
                        <img src="{{ url('./Image/custom-livraison-le-jour-meme.svg') }}" alt="">
                    </div>
                    <div class="card-text">
                        Envoi le jour même pour une commande du lundi au vendredi jusqu'à 13H (Sauf launch)
                    </div>
                </div>
                <div class="livraison-card"> 
                    <div class="card-title">
                        <img src="{{ url('./Image/custom-colis-surdimensionnes.svg') }}" alt="">
                    </div>
                    <div class="card-text">
                        Colis surdimensionnés et protégés
                    </div>
                </div>
                <div class="livraison-card"> 
                    <div class="card-title">
                        <img src="{{ url('./Image/custom-suivi-colis.svg') }}" alt="">
                    </div>
                    <div class="card-text">
                        Suivi en ligne de votre colis
                    </div>
                </div>
            </div>

            <div class="title"> Zones et tarifs </div>
            <div class="group-card">
                <div class="livraison-card"> 
                    <div class="card-title">
                        <img src="{{ url('./Image/custom-livraison-offerte-france.svg') }}" alt="">
                    </div>
                    <div class="card-title-2">
                        Maroc
                    </div>
                    <div class="card-text">
                        Livraison offerte dès 200DHS d'achat
                        (délai réception 48/72H)
                    </div>
                </div>
                <div class="livraison-card"> 
                    <div class="card-title">
                        <img src="{{ url('./Image/custom-livraison-europe.svg') }}" alt="">
                    </div>
                    <div class="card-title-2"> Afrique </div>
                    <div class="card-text">
                        à partir de 110DHS (exceptions possibles)
                        (délai réception 4/7 jours)
                    </div>
                </div>
                <div class="livraison-card"> 
                    <div class="card-title">
                        <img src="{{ url('./Image/custom-livraison-autre-destination.svg') }}" alt="">
                    </div>
                    <div class="card-title-2">
                        Autre destination
                    </div>
                    <div class="card-text">
                        à partir de 330DHS (40/45DHS avec DHL)
                        (délai réception 3/10jours)
                    </div>
                </div>
            </div>
            <div class="group-card">
                <div class="livraison-card"> 
                    <div class="card-title">
                        <img src="{{ url('./Image/custom-livraison-dom-tom.svg') }}" alt="">
                    </div>
                    <div class="card-title-2">
                        Dom Tom
                    </div>
                    <div class="card-text">
                        à partir de 350DHS 
                        (délai réception 7/10 jours)
                    </div>
                </div>
                <div class="livraison-card"> 
                    <div class="card-title">
                        <img src="{{ url('./Image/custom-livraison-faq.svg') }}" alt="">
                    </div>
                    <div class="card-title-2"> FAQ Livraison </div>
                    <div class="card-text">
                        retrouvez ici les questions
                        les plus fréquentes sur la livraison
                    </div>
                </div>
            </div>

            <div class="title"> Expédition de votre livre </div>
            <div class="text left">
                Les colis sont généralement expédiés dans un délai de 2 jours après réception du paiement. Ils sont expédiés via UPS avec un numéro de suivi et remis sans signature. Les colis peuvent également être expédiés via UPS Extra et remis contre signature. Veuillez nous contacter avant de choisir ce mode de livraison, car il induit des frais supplémentaires. Quel que soit le mode de livraison choisi, nous vous envoyons un lien pour suivre votre colis en ligne.
            </div>
            <div class="text left">
                Les frais d'expédition incluent les frais de préparation et d'emballage ainsi que les frais de port. Les frais de préparation sont fixes, tandis que les frais de transport varient selon le poids total du colis. Nous vous recommandons de regrouper tous vos articles dans une seule commande. Nous ne pouvons regrouper deux commandes placées séparément et des frais d'expédition s'appliquent à chacune d'entre elles. Votre colis est expédié à vos propres risques, mais une attention particulière est portée aux objets fragiles.
            </div>
        </div>
    </main>
@endsection