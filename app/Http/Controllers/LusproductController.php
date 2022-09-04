<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;


class LusproductController extends Controller
{
    public function index() {
        if(FacadesSession::has('admins')) {
            $Product = Product::orderBy('id', 'desc')->get();
            return view('Admin/lus_products/index', ['Products' => $Product]);
        }
        else {
            return view('Admin/Authentication');
        }
    }

    public function edit($id) {
        if(FacadesSession::has('admins')) {
            $Product = Product::where('id', $id)->get();
            return view('Admin/lus_products/edit', ['Products' => $Product]);
        }
        else {
            return view('Admin/Authentication');
        }
    }

    public function EditProduct(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'price' => 'integer|required',
            'category' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ]);
        $Product = Product::find($id);   
        $Product->name = $request->name;
        $Product->author = $request->author;
        $Product->price = $request->price;
        $Product->category = $request->category;
        $Product->description = $request->description;
        if($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Uploads/', $filename);
            $Product->photo = $filename;
        }
        $Product->save();
        return redirect('Products')->with('success', 'Produit Modifier avec success');
    }

    public function delete($id) {
        if(FacadesSession::has('admins')) {
            Product::where('id', $id)->delete();
            return redirect('Products')->with('success', 'Produit est supprimer avec success');
        }
        else {
            return view('Admin/Authentication');
        }
    }

    public function create() {
        if(FacadesSession::has('admins')) {
            return view('Admin/lus_products/create');
        }
        else {
            return view('Admin/Authentication');
        }
    }

    public function SaveProduct(Request $request) {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'price' => 'integer|required',
            'category' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ]);
        $Product = new Product();
        $Product->name = $request->name;
        $Product->author = $request->author;
        $Product->price = $request->price;
        $Product->category = $request->category;
        $Product->description = $request->description;
        if($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Uploads/', $filename);
            $Product->photo = $filename;
        }
        $Product->save();
        return redirect('Products')->with('success', 'Produit Ajouter avec success');
    }

    function show($id) {
        if(FacadesSession::has('admins')) {
            $Product = Product::find($id);
            return view('Admin/lus_products/show', ['Product' => $Product]);
        }
        else {
            return view('Admin/Authentication');
        }
    }
}
