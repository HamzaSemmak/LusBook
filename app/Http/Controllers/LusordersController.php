<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Session as FacadesSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    function show($id) {
        if(FacadesSession::has('admins')) {
            $order = Order::find($id);
            return view('Admin/lus_orders/show', ['order' => $order]);
        }
        else {
            return view('Admin/Authentication');
        }
    }

    static function getOrderProduct($id, $user_id) {
        if(FacadesSession::has('admins')) {
            $Products = DB::table('product_orders')->where('user_id', $user_id && 'id', $id);
            return $Products;
        }
        else {
            return view('Admin/Authentication');
        }
    }

    public function delete($id) {
        if(FacadesSession::has('admins')) {
            Order::where('id', $id)->delete();
            return redirect('Orders')->with('success', 'Order est supprimer avec success');
        }
        else {
            return view('Admin/Authentication');
        }
    }
}
