@extends('layout.cart')

@section('content')
<main class="order">
    <div class="content">
        <form action="/orderplace" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="title"> Adresse de facturation </div>
                    <div>
                        <label>Nom Complet <span class="red-marque">*</span></label>
                        <input type="text" name="name" placeholder="Nom & Prenom" value="{{ old('name') }}" class="form-control">
                        @error('name') <span class="msg-danger">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label>Adresse <span class="red-marque">*</span></label>
                        <input type="text" name="adresse" placeholder="IMM - APPT - RUE - CITY" value="{{ old('adresse') }}" class="form-control">
                        @error('adresse') <span class="msg-danger">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label>Ville <span class="red-marque">*</span></label>
                        <input type="text" name="city" placeholder="Ville" value="{{ old('city') }}" class="form-control">
                        @error('city') <span class="msg-danger">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label>Pays <span class="red-marque">*</span></label>
                        <input type="text" name="country" placeholder="Pays" value="{{ old('country') }}" class="form-control">
                        @error('country') <span class="msg-danger">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label>Type payement <span class="red-marque">*</span></label>
                        <select name="type_payement" class="form-control">
                            <option selected disabled></option>
                            <option value="Cash On Delivery"> Credit Card </option>
                            <option value="Cash On Delivery"> E-Wallet </option> 
                            <option value="Cash On Delivery"> PayPal </option> 
                        </select>
                        @error('type_payement') <span class="msg-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="title"> Paiement </div>
                    <div>
                        <label>Carte acceptée : </label>
                        <div class="card-accepted">
                            <img src="{{ url('./Image/card_img.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div>
                        <label>Nom sur la carte <span class="red-marque">*</span></label>
                        <input type="text" name="name_on_card" placeholder="Nom sur la carte" value="{{ old('name_on_card') }}" class="form-control">
                        @error('name_on_card') <span class="msg-danger">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label>Numéro de Carte de Crédit <span class="red-marque">*</span></label>
                        <input type="number" name="credit_card_number" placeholder="Numéro de Carte de Crédit" value="{{ old('credit_card_number') }}" class="form-control">
                        @error('credit_card_number') <span class="msg-danger">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label>Date d'expiration <span class="red-marque">*</span></label>
                        <input type="date" name="exp_date" placeholder="Date d'expiration" value="{{ old('exp_date') }}" class="form-control">
                        @error('exp_date') <span class="msg-danger">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label>CCV <span class="red-marque">*</span></label>
                        <input type="number" name="cvv_card" placeholder="CCV" value="{{ old('cvv_card') }}" class="form-control">
                        @error('cvv_card') <span class="msg-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-12">
                    Vos données bancaires sont sécurisées selon les dernières normes via
                    la plate-forme.
                    <br>
                    <button type="submit" class="btn">
                        <span></span>
                        &nbsp;&nbsp;
                        Order
                        &nbsp;
                        <i class="fa-solid fa-truck"></i>
                        &nbsp;&nbsp;
                    </button>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection