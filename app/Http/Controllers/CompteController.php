<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompteController extends Controller
{

    public function donnéesPersonnelle(Request $request) {
        if(Auth::check()) {
            $User = DB::table('users')
                ->where('id' , Auth::user()->id)
                ->get();

            return view('/donnéesPersonnelle', 
                ['User' => $User]
            );
        }
        else {
            return redirect('/login');
        }
    }

    public function editDonnéesPersonnelle(Request $request, $id) {
        $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'datenaissance' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8|max:16'
        ]);
        $User = User::find($id);   
        $User->firstname = $request->get('firstname');
        $User->lastname = $request->get('lastname');
        $User->name = $request->get('lastname') . ' ' . $request->get('firstname');
        $User->datenaissance = $request->get('datenaissance');
        $User->email = $request->get('email');
        $User->password = Hash::make($request->get('password'));
        $User->save();
        return redirect('/home')->with('success', 'User information est modifier avec success');
    }

    function myOrders() {
        if(Auth::check()) {
            $User = DB::table('users')
                ->where('id' , Auth::user()->id)
                ->get();    
            $user_id = null;
            foreach($User as $item) {
                $user_id = $item->id + $user_id;
            }
            $Orders = DB::table('orders')
                    ->where('user_id', $user_id)
                    ->get();
                    $user_id = null;
            foreach($User as $item) {
                $user_id = $item->id + $user_id;
            }
            return view('/myorders', ['Orders' => $Orders]);
        } else {
            return redirect('/login');
        }
    }
}
