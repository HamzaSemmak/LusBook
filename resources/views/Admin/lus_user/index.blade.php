@extends('layout.dashboard')

@section('content')
    <div class="product-page">
        <div class="d-flex">
            <div class="dashboard-title"> 
                <i class="fa-regular fa-user"></i>
                <span> Users </span>
            </div>
            <div>

            </div>
        </div>
        <div class="table-proooouct table-responsive">
            <table class="table">
                <thead class="bg-dark">
                    <tr>
                        <th> ID </th>
                        <th> Name </th>
                        <th> FirstName </th>
                        <th> LastName </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Users as $item)
                        <tr>
                            <td> {{ $item->id }} &nbsp;</td>
                            <td> {{ $item->name }} </td>
                            <td> {{ $item->firstname }} </td>
                            <td> {{ $item->lastname }} </td>
                            <td> 
                                <a href="usershow/{{ $item->id }}"> <i class="fa-regular fa-eye"></i> </a> 
                                &nbsp; &nbsp;&nbsp;
                                <a href="userremove/{{ $item->id }}"> <i class="fa-solid fa-trash"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
 