@extends('layout.master')

@section('content')
    <main class="features">
        <div class="img-header">
            <img src="{{ url('./Image/abebooks_header_v2.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="container">
            <div class="title">
                Le marketplace en ligne pour les livres neufs, usagés, rares et épuisés, plus les objets d'art et de collection.
            </div>
            <div class="text">
                Continuez à lire si vous souhaitez travailler dans le domaine du bonheur à l'échelle mondiale. AbeBooks.com est un marketplace en ligne pour les livres, les objets d'art et de collection, qui s'étend d'Amarillo à Zurich. Nous mettons en vente des millions d'articles provenant de milliers de vendeurs originaires de dizaines de pays, et nous rendons nos clients très, très heureux chaque jour. Nous comptons moins de 150 employés, donc chaque personne fait une différence.
            </div>
            <div class="text">
                Voilà ce que vous pouvez faire. AbeBooks est à la recherche de nouveaux talents, dont de supers développeurs logiciels, des professionnels du support client, des gourous de la conception UX, des responsables technique et produit, ainsi que des chargés de marketing motivés. Grâce à notre style de travail responsabilisant, chaque employé fait la différence.
            </div>
            <div class="text">
                Venez travailler (dur, mais en vous amusant) en Colombie britannique, une magnifique province du Canada, ou à Dusseldorf, au cœur de l'Europe. Prenez note...que nous déroulons le tapis rouge pour les génies.
            </div>

            <div class="content">
                <a href="/" class="logo">
                    <ion-icon name="book"></ion-icon>
                    <span> LusBook </span>
                </a>
                <div class="video-field">
                    <video controls autoplay>
                        <source src=”https://youtu.be/79X_yQMzHCE” type=video/ogg> 
                        <source src="https://youtu.be/79X_yQMzHCE" type=video/mp4>
                    </video>
                </div>
                <br>
                <div class="title">
                    Take the AbeBooks Victoria <br>
                    Office Tour
                </div>
                <div class="text">
                    Take a special video tour of the AbeBooks' office <br>
                    in Victoria, British Columbia on Canada's west <br>
                    coast.
                </div>
            </div>
        </div>
    </main>
@endsection