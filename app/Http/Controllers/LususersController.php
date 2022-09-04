<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;
use App\Models\User;

class LususersController extends Controller
{
    public function index() {
        if(FacadesSession::has('admins')) {
            $Users = User::all();
            return view('Admin/lus_user/index', ['Users' => $Users]);
        }
        else {
            return view('Admin/Authentication');
        }
    }

    public function delete($id) {
        if(FacadesSession::has('admins')) {
            User::where('id', $id)->delete();
            return redirect('Users')->with('success', 'User est supprimer avec success');
        }
        else {
            return view('Admin/Authentication');
        }
    }

    function show($id) {
        if(FacadesSession::has('admins')) {
            $User = User::find($id);
            return view('Admin/lus_user/show', ['User' => $User]);
        }
        else {
            return view('Admin/Authentication');
        }
    }
}
