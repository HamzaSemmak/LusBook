@extends('layout.cart')

@section('content')
    <?php
        use App\Http\Controllers\OrderController;
        $NbrProductInOrder = 0;
        $TotalOrder = OrderController::totalOrder($orderDetail['id']);
    ?>
    <div class="btn-print">
        <button class="print-invoice"> <i class="fa-solid fa-download"></i> </button>
    </div>
    <div class="Detail wave-animation">
        <div class="content">
            <div class="d-flex">
                <div class="logo"> 
                    <a class="logo">
                        <ion-icon name="planet"></ion-icon>
                        <span> LusBook </span>
                    </a>
                </div>
                <div class="detail-title"> Facture </div>
            </div>
            <br>
            <div class="facture-content">
                <div class="title"> Facture </div>
                <table class="table table-style-one">
                    <tbody>
                        <tr>
                            <td> Full Name </td>
                            <td> {{ $orderDetail['name'] }} </td>
                        </tr>
                        <tr>
                            <td> Adresse </td>
                            <td> {{ $orderDetail['adresse'] }} </td>
                        </tr>
                        <tr>
                            <td> Pays </td>
                            <td> {{ $orderDetail['city'] }} - {{ $orderDetail['country'] }} </td>
                        </tr>
                        <tr>
                            <td> Payement </td>
                            <td> {{ $orderDetail['type_payement'] }} </td>
                        </tr>
                        <tr>
                            <td> Credit Card n° </td>
                            <td> {{ $orderDetail['credit_card_number'] }} </td>
                        </tr>
                        <tr>
                            <td> Card Exp Date </td>
                            <td> {{ $orderDetail['exp_date'] }} </td>
                        </tr>
                        <tr>
                            <td> Card CCv </td>
                            <td> {{ $orderDetail['cvv_card'] }} </td>
                        </tr>
                        <tr>
                            <td> Date Order </td>
                            <td> {{ $orderDetail['date'] }} </td>
                        </tr>
                        <tr>
                            <td> Product n° </td>
                            <td> {{ OrderController::NbrProductInOrder($orderDetail['id']); }} </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="facture-content">
                <div class="title"> Product </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="bg-dark">
                            <tr>
                                <th class="th-xxl"> Product </th>
                                <th> Prix </th>
                                <th> Quantite </th>
                                <th> Total Price </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (OrderController::getProductInOrder($orderDetail['id']) as $item)
                                <tr>
                                    <td> {{ $item->name }} </td>
                                    <td> {{ $item->price  }} MAD</td>
                                    <td> {{ $item->quantite }} </td>
                                    <td> {{ $item->quantite * $item->price }} MAD</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="facture-content">
                <div class="title"> Total </div>
                <table class="table table-style-one">
                    <tbody>
                        <tr>
                            <td> Sous-Toatl HT</td>
                            <td> {{ $TotalOrder }} MAD </td>
                        </tr>
                        <tr>
                            <td> TVA 20% de {{ $TotalOrder }}</td>
                            <td> {{ $HTC = $TotalOrder * 20 / 100}} MAD </td>
                        </tr>
                        @if ($TotalOrder >= 300)
                            <tr>
                                <td> Livraison </td>
                                <td> Free </td>
                            </tr>
                            <tr>
                                <td> Final Total  </td>
                                <td> {{ $TotalOrder - $HTC }} </td>
                            </tr>
                        @else
                            <tr>
                                <td> Livraison </td>
                                <td> 30 MAD </td>
                            </tr>
                            <tr>
                                <td> Final Total  </td>
                                <td> {{ $TotalOrder - ($HTC - 30) }} </td>
                            </tr>
                        @endif   
                    </tbody>
                </table>
            </div>
            <div class="facture-information">
                Lorem ipsum dolor sit amet. <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </div>
        </div>
    </div>
@endsection
