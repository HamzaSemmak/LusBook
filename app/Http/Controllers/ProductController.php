<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Favorites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    function index() {
        $Products = Product::skip(0)->take(10)->orderBy('id', 'desc')->get();
        return view('index', 
            ['products' => $Products],
        );
    }

    function show($id) {
        $Product = Product::find($id);
        $Product_Associes = Product::take(10)->orderBy('id', 'desc')->get();
        if($Product == null) {
            return redirect('/404'); 
        }
        else {
            return view('fiche-product', 
                ['Product' => $Product], 
                ['productAssocies' => $Product_Associes],
            );
        }
    }

    function search(Request $request) {
        $name = $request->input('query');
        $data = Product::where
            ('name', 'like' , '%' . $name . '%')
            ->get();
            
        return view('search', ['Product' => $data], ['query' => $name]);
    }
}
