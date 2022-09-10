@extends('layout.dashboard')

@section('content')
    <?php 
        // $id = 0;
        // $name = '';
        // $firstname = '';
        // $lastname = '';
        // $datenaissance = '';
        // $email = '';
        // $password = '';
        // foreach ($User as $item) {
        //     $id = $item->id;
        //     $name = $item->name;
        //     $firstname = $item->firstname;
        //     $lastname = $item->lastname;
        //     $datenaissance = $item->datenaissance;
        //     $email = $item->email;
        //     $password = $item->password;
        // }
    ?>
    <div class="dashboard-title"> 
        <i class="fa-solid fa-cart-shopping"></i>
        <span> Produits </span>
    </div>
    <div class="form-controll-product">
        <div class="row">
            <div class="col-3">
                <label> ID </label>
                <input class="form-control border-none" value="{{ $User['id']  }}">
            </div>
            <div class="col-3">
                <label> Name </label>
                <input class="form-control border-none" value="{{ $User['name']  }}">
            </div>
            <div class="col-3">
                <label> Firstname </label>
                <input class="form-control border-none" value="{{ $User['firstname']  }}">
            </div>
            <div class="col-3">
                <label> Last Name </label>
                <input class="form-control border-none" value="{{ $User['lastname']  }}">
            </div>
            <div class="col-3">
                <label> Date Naissance </label>
                <input class="form-control border-none" value="{{ $User['datenaissance']  }}">
            </div>
            <div class="col-3">
                <label> Email </label>
                <input class="form-control border-none" value="{{ $User['email']  }}">
            </div>
            <div class="col-3">
                <label> Date Naissance </label>
                <input type="password" class="form-control border-none" value="{{ $User['password']  }}">
            </div>
        </div>
    </div>
@endsection
 