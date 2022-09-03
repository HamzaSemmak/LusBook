@extends('layout.master')

@section('content')
    <main class="donnéesPersonnelle">
        <div class="container">
            <div class="title">
                Mes informations personnelles
            </div>
            <div class="content">
                @foreach ($User as $item)
                    <form action="/editDonnéesPersonnelle/{{$item->id}}" method="POST" class="row">
                        @csrf
                        <div class="col-4">
                            <label>Nom <span class="red-marque">*</span></label>
                            <input type="text" name="firstname" placeholder="Nom" value="{{ $item->firstname }}" required class="form-control">
                            @error('firstname') <span class="msg-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-4">
                            <label>Prenom <span class="red-marque">*</span></label>
                            <input type="text" name="lastname" placeholder="Prenom" value="{{ $item->lastname }}" required class="form-control">
                            @error('lastname') <span class="msg-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-4">
                            <label>Nom Complet <span class="red-marque">*</span></label>
                            <input type="date" name="datenaissance"  value="{{ $item->datenaissance }}" required class="form-control">
                            @error('datenaissance') <span class="msg-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-4">
                            <label>E-mail <span class="red-marque">*</span></label>
                            <input type="email" name="email" placeholder="exemple@gmail.com" value="{{ $item->email }}" required class="form-control">
                            @error('email') <span class="msg-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-4">
                            <label> Nouveau Mot de passe <span class="red-marque">*</span></label>
                            <input type="password" name="password" placeholder="Nouveau Mot de passe" class="form-control">
                            @error('password') <span class="msg-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12">
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <button type="submit" class="btn">
                                <span></span>
                                Modifier
                            </button>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </main>
@endsection