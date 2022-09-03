@extends('layout.master')

@section('content')
    <main class="myorders">
        <div class="container">
            <div class="title">
                Listes des commandes
            </div>
            <div class="content">
                @if ($Orders->isempty())
                    <div class="message">
                        <div class="alert-danger">
                            Il ya aucune commande.
                        </div>
                    </div>
                @else
                    <div class="myOrders-list table-responsive">
                        <div class="table-responsive">
                            <table class="table ">
                                <thead class="bg-dark">
                                    <tr>
                                        <th> Nom </th>
                                        <th> Order DATE </th>
                                        <th> Total </th>
                                        <th> Payement </th>
                                        <th> Adresse </th>
                                        <th> Details </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Orders as $item)
                                        <tr>
                                            <td class="th-xxl"> {{ $item->name }} </td>
                                            <td class="th-sm"> {{ $item->date }} </td>
                                            <td class="th-sm"> {{ $item->total }} MAD </td>
                                            <td class="th-sm"> {{ $item->type_payement }} </td>
                                            <td class="th-xxl"> {{ $item->adresse }} </td>
                                            <td class="th-sm">
                                                <a href="myorderdetail/{{$item->id}}" target="_blank" > 
                                                    Voir Plus 
                                                    &nbsp;
                                                    <i class="fa-solid fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </main>
@endsection
