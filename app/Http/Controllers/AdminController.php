<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session as FacadesSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function Admin(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:16',
        ]);
        $userInfo = Admin::where('email','=', $request->email)->first();
        if(!$userInfo) {
            return back()->with('fail', 'Oups votre Email est incorrect');
        }
        else {
            if(Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('admins', $userInfo);
                return redirect('/Admin');
            }
            else {
                return back()->with('fail', "Oups votre motdepasse est incorrect");
            }
        }   
    }

    public function Authentication() {
        if(FacadesSession::has('admins')) {
            return view('Admin/Admin');
        }
        else {
            return view('Admin/Authentication');
        }
    }

    public function index() {
        if(FacadesSession::has('admins')) {  
            return view('Admin/Admin');
        }
        else {
            return view('Admin/Authentication');
        }
    }

    public function logout() {
        FacadesSession::forget('admins');
        return view('Admin/Authentication');
    }

    static function getAdmin() {
        $admin = FacadesSession::get('admins');
        return $admin->name;
    }

    static function totalPrpducts() {
        $total = Product::count();
        return $total;
    }

    static function totalOrders() {
        $total = Order::count();
        return $total;
    }

    static function totalUsers() {
        $total = Auth::count();
        return $total;
    }

    static function getUsers() {
        $User = DB::table('users')
                ->select('firstname','lastname','created_at')
                ->orderBy('id', 'desc')
                ->take(7)
                ->get();
        return $User;
    }

    static function getOrders() {
        $Orders = DB::table('orders')
                ->orderBy('id', 'desc')
                ->take(7)
                ->get();
        return $Orders;
    }

    static function calcDaysFromDate($date) {
        $now = Carbon::now();
        $result = $now->diffInDays($date);
        if($result == 0) {
            $result = 1;
        }
        return $result;
    }

    static function getProducts() {
        $Product = DB::table('products')
                ->orderBy('id', 'desc')
                ->take(10)
                ->get();

        return $Product;
    }


    public function Products() {
        return 'hello';
    }
}
