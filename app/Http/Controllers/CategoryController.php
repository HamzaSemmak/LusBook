<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CategoryController extends Controller
{
    public function advancedSearchByPrice(Request $request) {
        $Min = $request->rangeValueMin;
        $Max = $request->rangeValueMax;
        if($Min > $Max) {
            return back()->with('fail', 'The Min price is bigger than Max');
        }
        else if($Min == $Max) {
            return back()->with('fail', 'The Min and Max price are equals');
        }
        else if($Min < $Max) {
            $Products = Product::
                whereBetween('price' , [$Min, $Max])
                ->get();
            return view('/searchAdvanced', ['Product' => $Products]);
        }
    }

    public function advancedSearchByDays($days) {
        $DaysMinis = Carbon::now()->subDay($days);
        $Products = Product::whereBetween('created_at', [$DaysMinis, Carbon::now()])->get();
        return view('/searchReleases', ['Product' => $Products]);
    }

    public function advancedSearchByAuthor($author) {
        $Products = Product::where('author', $author)->get();
        return view('/searchauthor', ['Product' => $Products]);
    }

    public function nouveautes() {
        $Products = DB::table('products')->skip(0)->take(100)->orderBy('id', 'desc')->get();
        return view('/nouveautes', ['Products' => $Products]);
    }

    public function categorie($categorie) {
        $Products = Product::where('category', $categorie)->get();
        return view('/categorie',['Products' => $Products],['Categorie' => $categorie]);    
    }

    static function getCategorie($categorie) {
        $Products = Product::skip(0)->take(10)->where('category', $categorie)->orderBy('id', 'desc')->get();
        return $Products;
    }

    static function getAuthaur() {
        $author = Product::take(3)->orderBy('id', 'desc')->get();
        return $author;
    }
}
