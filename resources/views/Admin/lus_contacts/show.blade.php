@extends('layout.dashboard')

@section('content')
    <div class="dashboard-title"> 
        <i class="fa-solid fa-address-book"></i>
        <span> Contact </span>
    </div>
    <div class="form-controll-product">
        <div class="row">
            <div class="col-3">
                <label> ID </label>
                <input class="form-control border-none" value="{{ $Contact['id']  }}">
            </div>
            <div class="col-3">
                <label> Name </label>
                <input class="form-control border-none" value="{{ $Contact['name']  }}">
            </div>
            <div class="col-3">
                <label> Email </label>
                <input class="form-control border-none" value="{{ $Contact['email']  }}">
            </div>
            <div class="col-3">
                <label> Telephone  </label>
                <input class="form-control border-none" value="{{ $Contact['phone']  }}">
            </div>
            <div class="col-3">
                <label> Envoyer le   </label>
                <input class="form-control border-none" value="{{ $Contact['created_at']  }}">
            </div>
            <div class="col-9">
                <label> Message  </label>
                <input class="form-control border-none" value="{{ $Contact['message']  }}">
            </div>
        </div>
    </div>
@endsection
 