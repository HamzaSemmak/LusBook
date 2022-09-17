<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Session as FacadesSession;
use Illuminate\Http\Request;

class LusordersController extends Controller
{
    public function index() {
        if(FacadesSession::has('admins')) {
            $Orders = Order::all();
            return view('Admin/lus_orders/index', ['Orders' => $Orders]);
        }
        else {
            return view('Admin/Authentication');
        }
    }
}
