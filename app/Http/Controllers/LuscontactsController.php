<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;

class LuscontactsController extends Controller
{
    public function index() {
        if(FacadesSession::has('admins')) {
            $contact = Contact::all();
            return view('Admin/lus_contacts/index', ['Contacts' => $contact]);
        }
        else {
            return view('Admin/Authentication');
        }
    }

    public function delete($id) {
        if(FacadesSession::has('admins')) {
            Contact::where('id', $id)->delete();
            return redirect('contacts')->with('success', 'Contact est supprimer avec success');
        }
        else {
            return view('Admin/Authentication');
        }
    }

    function show($id) {
        if(FacadesSession::has('admins')) {
            $Contact = Contact::find($id);
            return view('Admin/lus_contacts/show', ['Contact' => $Contact]);
        }
        else {
            return view('Admin/Authentication');
        }
    }
}
