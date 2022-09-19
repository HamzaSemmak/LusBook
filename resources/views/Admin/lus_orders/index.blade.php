@extends('layout.dashboard')

@section('content')
    <div class="Product-page">
        <div class="d-flex">
            <div class="dashboard-title"> 
                <i class="fa-solid fa-bag-shopping"></i>
                <span> Commande </span>
            </div>
        </div>
        <div class="table-proooouct table-responsive">
            <table class="table">
                <thead class="bg-dark">
                    <tr>
                        <th> ID </th>
                        <th> Name </th>
                        <th> Adresse </th>
                        <th> type Payement </th>
                        <th> total </th>
                        <th> Date </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Orders as $item)
                        <tr>
                            <td> {{ $item->id }} &nbsp;</td>
                            <td> {{ $item->name }} </td>
                            <td> {{ $item->adresse }} </td>
                            <td> {{ $item->type_payement }} </td>
                            <td> {{ $item->total }} </td>
                            <td> {{ $item->date }} </td>
                            <td> 
                                <a href="ordershow/{{ $item->id }}"> <i class="fa-regular fa-eye"></i> </a>
                                <a href="deleteshow/{{ $item->id }}"> <i class="fa-solid fa-trash"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
 