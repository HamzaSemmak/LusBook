<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    function AddToCart(Request $request) {
        if(Auth::check()) {
            $Products_id = $request->Product_id;
            $Products = Product::where('id', $Products_id)->get();
            $category = '';
            $name = '';
            $price = '';
            $photo = '';
            $author = '';
            foreach($Products as $item) {
                $category = $item->category;
                $name = $item->name;
                $price = $item->price;
                $photo = $item->photo;
                $author = $item->author;
            }
            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $Products_id;
            $cart->name = $name;
            $cart->price = $price;
            $cart->author = $author;
            $cart->category = $category;
            $cart->photo = $photo;
            $cart->quantite = $request->quantite;
            $cart->save();
            return back()->with('success', 'Produit est ajoute avec succé');   
        }
        else {
            return redirect('login');
        }
    }

    function shoppingCart() {
        if(Auth::check()) {
            $Products = DB::table('cart')
                ->where('user_id', Auth::user()->id)
                ->select('photo','name','category','price','product_id','author', 'quantite')
                ->distinct()
                ->get();

            return view('cart', 
                ['Products' => $Products]
            );
        }
        else {
            return redirect('login');
        }
    }

    static function checkcart($id) {
        if(Auth::check()) {
            $Products = Cart::where('user_id' , Auth::user()->id)->where('product_id', $id)->get();
            if(is_null($Products)) {
                return 0;
            }
            else {
                foreach($Products as $item) {
                    if($id == $item->product_id) {
                        return 1;
                    }
                    else {
                        return 0;
                    }
                }
            }
        }
        else {
            return 0;
        }
    }

    function removeProductFromCart($id) {
        Cart::where('product_id', $id)->delete();
        return back();
    }

    static function cartItem() {
        $User_Id = Auth::user()->id;
        $NbreProduct = Cart::where('user_id' , $User_Id)->distinct()->count();
        return $NbreProduct;
    }

    static function cartItemQte() {
        $Products = DB::table('cart')->where('user_id', Auth::user()->id)->get();
        $qteAll = 0;
        foreach ($Products as $item) {
            $qteAll = $qteAll + $item->quantite;
        }
        return $qteAll;
    }

    static function totalProduct() {
        $Total = DB::table('cart')->where('user_id', Auth::user()->id)->get();
        
        $Result = 0;
        $TotalPriceForProduct = 0;
        foreach($Total as $item) {
            $TotalPriceForProduct = $item->price * $item->quantite;
            $Result = $Result + $TotalPriceForProduct;
        }
        return $Result;
    }
}
