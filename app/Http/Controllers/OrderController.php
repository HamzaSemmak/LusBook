<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductOrder;
use App\Models\Cart;
use App\Models\Order;   
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
  
class OrderController extends Controller
{
    function orderProduct() {
        if(Auth::check()) {
            $total =  DB::table('cart')
                ->join('products','cart.product_id', '=' , 'products.id')
                ->where('cart.user_id',Auth::user()->id)
                ->sum('products.price');
            return view('order', 
                ['total' => $total],
            );
        }
        else {
            return redirect('/login');
        }
    }

    function orderplace(Request $request) {
        $request->validate([
            'name' => 'required',
            'type_payement' => 'required',
            'adresse' => 'required',
            'city' => 'required',
            'country' => 'required',
            'name_on_card' => 'required',
            'credit_card_number' => 'required|integer|digits:14',
            'exp_date' => 'required|date',
            'cvv_card' => 'required|integer|digits:3',
        ]);
        $user_id = Auth::user()->id;
        $card_product = Cart::where('user_id', $user_id)->get();
        $count = 0;
        $order = new Order();
        $order->user_id = $user_id;
        $order->name = $request->name;
        $order->adresse = $request->adresse;
        $order->city = $request->city;
        $order->country = $request->country;
        $order->type_payement = $request->type_payement;
        $order->name_on_card = $request->name_on_card;
        $order->credit_card_number = $request->credit_card_number;
        $order->exp_date = $request->exp_date;
        $order->cvv_card = $request->cvv_card;
        $Total = DB::table('cart')->where('user_id', Auth::user()->id)->get();
        $Result = 0;
        $TotalPriceForProduct = 0;
        foreach($Total as $item) {
            $TotalPriceForProduct = $item->price * $item->quantite;
            $Result = $Result + $TotalPriceForProduct;
        }
        $order->total = $Result;
        $currentDate = Carbon::now();
        $order->date = $currentDate;
        $order->save();
        $last_row = DB::table('orders')->orderBy('id', 'DESC')->first();
        foreach($card_product as $item) {
            $Product_shipped = new ProductOrder();
            $Product_shipped->order_id = $last_row->id;
            $Product_shipped->user_id = $user_id;
            $Product_shipped->product_id = $item->product_id;
            $Product_shipped->name = $item->name;
            $Product_shipped->author = $item->author;
            $Product_shipped->price = $item->price;
            $Product_shipped->category = $item->category;
            $Product_shipped->photo = $item->photo;
            $Product_shipped->quantite = $item->quantite;
            $Product_shipped->save();
            Cart::where('product_id', $item->product_id)->delete();
        }
        return redirect('/')->with('success', 'Commande passe avec success');
    }

    function myorderdetail($id) {
        $orderDetail = Order::find($id);
        return view('myorderdetail', ['orderDetail' => $orderDetail]);
    }

    static function NbrProductInOrder($id) {
        $result = ProductOrder::where('order_id', $id)->count();
        return $result;
    }

    static function getProductInOrder($id) {
        $result = ProductOrder::where('order_id', $id)->get();
        return $result;
    }

    static function totalOrder($id) {
        $Total = DB::table('product_orders')
        ->where('user_id', Auth::user()->id)
        ->where('order_id', $id)
        ->get();
        
        $Result = 0;
        $TotalPriceForProduct = 0;
        foreach($Total as $item) {
            $TotalPriceForProduct = $item->price * $item->quantite;
            $Result = $Result + $TotalPriceForProduct;
        }
        return $Result;
    }
}
