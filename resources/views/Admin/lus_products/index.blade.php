@extends('layout.dashboard')

@section('content')
    <div class="Product-page">
        <div class="d-flex">
            <div class="dashboard-title"> 
                <i class="fa-solid fa-cart-shopping"></i>
                <span> Produits </span>
            </div>
            <div>
                <a href="/productcreate" class="btn-primary"> New Produit </a>
            </div>
        </div>
        <div class="table-proooouct table-responsive">
            <table class="table">
                <thead class="bg-dark">
                    <tr>
                        <th> ID </th>
                        <th> Image </th>
                        <th> Name </th>
                        <th> categorie </th>
                        <th> Price </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Products as $item)
                        <tr>
                            <td> {{ $item->id }} &nbsp;</td>
                            <td class="image"> 
                                <img src="{{ url('./Uploads/' . $item->photo) }}" class="img-fluid">    
                            </td>
                            <td> {{ $item->name }} </td>
                            <td> {{ $item->category }} </td>
                            <td> {{ $item->price }} </td>
                            <td> 
                                <a href="productedit/{{ $item->id }}"> <i class="fa-solid fa-pen"></i> </a>
                                <a href="productremove/{{ $item->id }}"> <i class="fa-solid fa-trash"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
 