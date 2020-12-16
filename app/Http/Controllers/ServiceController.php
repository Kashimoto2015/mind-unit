<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index(){
        return view('products.index');
    }

    public function category($index){
        if($index === "logo-design")
            return view('products.logo-design');
        else if ($index === "website")
            return view('products.website');
        else if ($index === "apply")
            return view('products.apply');
        else
            return redirect('/products');
    }

    public function addToCart(Request $request){
        $id = $request->input('id');
        if (isset($id))
            return redirect('/products/create/' . $id);
        else
            return redirect('/');
    }

    public function create($id){
        if($id === 1){
            return view('products.description.logo-design');
        }
    }

}
