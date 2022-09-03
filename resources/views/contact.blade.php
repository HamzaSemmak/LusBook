@extends('layout.master')

@section('content')
    <main class="contact">
        <div class="container">
            <h5> Contactez-nous </h5>
            <p class="text">
                Remplissez le formulaire ci-dessous avec vos coordonnées et envoyez nous votre message. Nous vous répondrons dans les plus brefs délais.
            </p>
            <br>
            <form action="/sendEmail" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label> Entrer Votre Nom  <span class="red-marque">*</span> </label>
                    <input type="text" class="form-control name" name="name" value="{{ old('name') }}" placeholder="Entrer Votre Nom">
                    @error('name') <span class="msg-danger">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label> E-mail  <span class="red-marque">*</span> </label>
                    <input type="email" class="form-control email" name="email" value="{{ old('email') }}" placeholder="Entrer Votre Email" autocomplete="email">
                    @error('email') <span class="msg-danger">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label> Numero Telephone  <span class="red-marque">*</span> </label>
                    <input type="text" class="form-control phone" name="phone" value="{{ old('phone') }}" placeholder="Entrer Votre Email">
                    @error('phone') <span class="msg-danger">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label> Message <span class="red-marque">*</span> </label>
                    <textarea class="form-control message" name="message" placeholder="Entrer Votre Message" cols="30" rows="10"></textarea>
                    @error('message') <span class="msg-danger">{{ $message }}</span> @enderror
                </div>
                <button class="btn" onclick="Validate()" type="submit"> <span></span> Envoyer </button>
            </form>
        </div>
    </main>
@endsection