@extends('layout.dashboard')

@section('content')
    <?php
        use App\Http\Controllers\AdminController;
        $totalPrpducts = 0;
        $totalOrders = 0;
        $totalUsers = 0;
        $getUsers = 0;
        $getOrders = 0;
        $getProducts = 0;
        $totalPrpducts = AdminController::totalPrpducts();
        $totalOrders = AdminController::totalOrders();
        $totalUsers = AdminController::totalOrders();
        $getUsers = AdminController::getUsers();
        $getOrders = AdminController::getOrders();
        $getProducts = AdminController::getProducts();
    ?>
    <div class="dashboard-title"> 
        <i class="fa-solid fa-arrow-trend-up"></i>
        <span> Dashboard </span>
    </div>
    <div class="box-field">
        <div class="box">
            <div class="box-item" id="Visitor"> </div>
            <div class="box-links">
                <div> Total Visitor </div>
                <div> LusBook counting service </div>
            </div>
            <div class="box-icon">
                <i class="fa-solid fa-eye"></i>
            </div>
        </div>
        <div class="box">
            <div class="box-item"> 
                {{ $totalUsers }}
            </div>
            <div class="box-links">
                <div> Users </div>
                <div> LusBook counting service </div>
            </div>
            <div class="box-icon">
                <i class="fa-regular fa-user"></i>
            </div>
        </div>
        <div class="box">
            <div class="box-item"> {{ $totalPrpducts }} </div>
            <div class="box-links">
                <div> Total Products </div>
                <div> LusBook counting service </div>
            </div>
            <div class="box-icon">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
        </div>
        <div class="box">
            <div class="box-item"> {{ $totalOrders }} </div>
            <div class="box-links">
                <div> Total Orders </div>
                <div> LusBook counting service </div>
            </div>
            <div class="box-icon">
                <i class="fa-solid fa-tags"></i>
            </div>
        </div>
    </div>
    <div class="dashboboard-home-content row">
        <div class="col-8"> 
            <div class="flex-title">
                <div class="title-section">
                    Commandes
                </div>
                <a href="#" class="link">
                    Voir Tout
                </a>
            </div>
            <div class="table-responsive">
                <table class="table ">
                    <thead class="bg-secondary">
                        <tr>
                            <th> ID </th>
                            <th> Client Nom </th>
                            <th> Commande date </th>
                            <th> Total </th>
                            <th> Adresse </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getOrders as $item)
                            <tr>
                                <td> {{$item->id}} </td>
                                <td> {{$item->name}} </td>
                                <td> {{$item->date}} </td>
                                <td> {{$item->total}} MAD</td>
                                <td> {{$item->adresse}} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-4">
            <div class="flex-title">
                <div class="title-section">
                    Client
                </div>
                <a href="/Users" class="link">
                    Voir Tout
                </a>
            </div>
            @foreach ($getUsers as $item)
                <div class="d-flex">
                    <img src="{{ url('./Image/face avatar.png') }}" alt="">
                    <div>
                        <span> {{ $item->firstname }} {{ $item->lastname }} </span> 
                        &nbsp;
                        a créé un compte &nbsp;
                        <p>
                            il y a {{ AdminController::calcDaysFromDate($item->created_at) }} Jour
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="dashboboard-home-content row">
        <div class="col-12">
            <div class="flex-title">
                <div class="title-section">
                    Produit 
                </div>
                <a href="/Products" class="link">
                    Voir Tout
                </a>
            </div>
            <div class="table-responsive">
                <table class="table ">
                    <thead class="bg-secondary">
                        <tr>
                            <th> ID </th>
                            <th> Nom </th>
                            <th> Autheur </th>
                            <th> Prix </th>
                            <th> Category </th>
                            <th> Date </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getProducts as $item)
                            <tr>
                                <td> {{ $item->id }} </td>
                                <td> {{ $item->name }} </td>
                                <td> {{ $item->author }} </td>
                                <td> {{ $item->price }} </td>
                                <td> {{ $item->category }} </td>
                                <td> {{ $item->created_at }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
 