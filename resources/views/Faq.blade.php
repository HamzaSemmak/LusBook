@extends('layout.master')

@section('content')
    <main class="Faq">
        <div class="container">
            <div class="titre">
                FAQ
            </div>
            <div class="accordion">
                <div class="accordion-content">
                    <div class="accordian-header">
                        <span class="title"> Pouvez-vous commander un produit qui n’est pas en stock sur votre site ? </span>
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="accordian-description">
                        Tout notre stock est en ligne. Une fois épuisé, un produit n'est jamais plus approvisionné.
                        Nous ne pouvons pas commander une référence indisponible sur le site ou une taille épuisée.
                    </div>
                </div>
            </div>
 
            <div class="accordion">
                <div class="accordion-content">
                    <div class="accordian-header">
                        <span class="title"> Qu'allez-vous recevoir prochainement pour des lancements ? </span>
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="accordian-description">
                        Vous trouverez toutes les informations sur notre page COMING SOON. Si le modèle n'est pas listé,
                        nous ne savons pas si nous l'aurons, il est inutile de contacter le service client, tout est mis
                        à jour sur la page.
                    </div>
                </div>
            </div>

            <div class="accordion">
                <div class="accordion-content">
                    <div class="accordian-header">
                        <span class="title"> Puis-je faire une précommande ? </span>
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="accordian-description">
                        Nous ne pouvons pas proposer de précommande. 
                    </div>
                </div>
            </div>

            <div class="accordion">
                <div class="accordion-content">
                    <div class="accordian-header">
                        <span class="title"> Est-ce que vous vendez des contrefaçons ? </span>
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="accordian-description">
                        L'ensemble des produits proposés à la vente sur LUS-Book sont 100% authentiques et sont approvisionnés directement chez les marques.
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection