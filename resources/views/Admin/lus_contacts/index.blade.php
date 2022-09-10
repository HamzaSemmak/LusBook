@extends('layout.dashboard')

@section('content')
    <div class="Product-page">
        <div class="d-flex">
            <div class="dashboard-title"> 
                <i class="fa-solid fa-address-book"></i>
                <span> Contact </span>
            </div>
        </div>
        <div class="table-proooouct table-responsive">
            <table class="table">
                <thead class="bg-dark">
                    <tr>
                        <th> ID </th>
                        <th> Name </th>
                        <th> Email </th>
                        <th> Phone </th>
                        <th> Envoyez le  </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Contacts as $item)
                        <tr>
                            <td> {{ $item->id }} &nbsp;</td>
                            <td> {{ $item->name }} </td>
                            <td> {{ $item->email }} </td>
                            <td> {{ $item->phone }} </td>
                            <td> {{ $item->created_at }} </td>
                            <td> 
                                <a href="contactshow/{{ $item->id }}"> <i class="fa-regular fa-eye"></i> </a>
                                <a href="contactremove/{{ $item->id }}"> <i class="fa-solid fa-trash"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
 