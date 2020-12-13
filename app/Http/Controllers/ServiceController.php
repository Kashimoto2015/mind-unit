<?php

namespace App\Http\Controllers;

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

}
