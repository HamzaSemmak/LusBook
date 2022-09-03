<?php

namespace App\Http\Controllers;

use App\Models\Favorites;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FavoritesController extends Controller
{
    public function favorites() {
        if(Auth::check()) {
            $Products = DB::table('favorites')
                        ->where('user_id', Auth::user()->id)
                        ->select('product_id','name','price','category','photo','author')
                        ->distinct()
                        ->orderBy('product_id', 'desc')
                        ->get();
            return view('favorites', ['Products' => $Products]);
        }
        else {
            return redirect('login');
        }
    }

    function AddToFavorite(Request $request) {
        if(Auth::check()) {
            $Products_id = $request->Product_id;
            $Products = Product::where('id', $Products_id)->get();
            $category = '';
            $name = '';
            $price = '';
            $photo = '';
            $author = '';
            foreach($Products as $item){
                $category = $item->category;
                $name = $item->name;
                $price = $item->price;
                $photo = $item->photo;
                $author = $item->author;
            }
            $favorites = new Favorites();
            $favorites->user_id = Auth::user()->id;
            $favorites->product_id = $Products_id;
            $favorites->name = $name;
            $favorites->price = $price;
            $favorites->category = $category;
            $favorites->photo = $photo;
            $favorites->author = $author;
            $favorites->save();
            return back()->with('success', 'Produit est ajoute avec succé');   
        }
        else {
            return redirect('login');
        }
    }

    static function NbreFavorites() {
        $User_Id = Auth::user()->id;
        $Favorites = DB::table('favorites')
                ->where('user_id', Auth::user()->id)
                ->select('product_id','name','price','category','photo')
                ->distinct()
                ->get();
        $NbreFavorites = count($Favorites);
        return $NbreFavorites;
    }

    function removeProductFromFavorite($id) {
        Favorites::where('product_id', $id)->delete();
        return back();
    }
    
    static function checkFavorite($id) {
        if(Auth::check()) {
            $Products =  Favorites::where('user_id' , Auth::user()->id)->where('product_id', $id)->get();
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
}