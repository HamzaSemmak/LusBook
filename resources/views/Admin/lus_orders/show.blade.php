@extends('layout.dashboard')

@section('content')
    <div class="dashboard-title"> 
        <i class="fa-solid fa-address-book"></i>
        <span> order </span>
    </div>
    <div class="form-controll-product">
        <div class="row">
            <div class="col-3">
                <label> ID </label>
                <input class="form-control border-none" value="{{ $order['id']  }}" readonly>
            </div>
            <div class="col-3">
                <label> user </label>
                <input class="form-control border-none" value="{{ $order['user_id']  }}" readonly>
            </div>
            <div class="col-3">
                <label> name  </label>
                <input class="form-control border-none" value="{{ $order['name']  }}" readonly>
            </div>
            <div class="col-3">
                <label> Adresse   </label>
                <input class="form-control border-none" value="{{ $order['adresse']  }}" readonly>
            </div>
            <div class="col-3">
                <label> Ville  </label>
                <input class="form-control border-none" value="{{ $order['city']  }}" readonly>
            </div>
            <div class="col-3">
                <label> Pays  </label>
                <input class="form-control border-none" value="{{ $order['country']  }}" readonly>
            </div>
            <div class="col-3">
                <label> Type Payement  </label>
                <input class="form-control border-none" value="{{ $order['type_payement']  }}" readonly>
            </div>
            <div class="col-3">
                <label> Name on card  </label>
                <input class="form-control border-none" value="{{ $order['name_on_card']  }}" readonly>
            </div>
            <div class="col-3">
                <label> Total </label>
                <input class="form-control border-none" value="{{ $order['total']  }}" readonly>
            </div>
            <div class="col-3">
                <label> Date </label>
                <input class="form-control border-none" value="{{ $order['date']  }}" readonly>
            </div>
        </div>
    </div>
@endsection
 