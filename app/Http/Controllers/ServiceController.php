<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function redirectToDescription(Request $request){
        $id = $request->input('id');
        if (isset($id))
            return redirect('/products/create/' . $id);
        else
            return redirect('/');
    }

    public function create($index){
        if (Auth::check()) {
            if ($index >= 1 && $index <= 4) {
                return view('products.description.logo-design')->with('index', $index);
            }
        } else {
            return redirect('/products');
        }
    }

    public function createLogoDesign(Request $request){

        $this->validate($request, [
            'file' => 'image|nullable|max:1999',
        ]);

        $description = $request->input('description');
        $product = new Item();
        $product->user_id = auth()->user()->id;
        $product->product_id = $request->input('index');
        $product->description = $description;

        if($request->hasFile('file')){

            $fileNameWithExt = $request->file('file')->getClientOriginalName();
            $fileExt = $request->file('file')->getClientOriginalExtension();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $fileNameToStore = $fileName . '_' . time() . '.' . $fileExt;
            $path = $request->file('file')->storeAs('public/logo-examples', $fileNameToStore);
            $product->file_name = $fileNameToStore;

        }

        $product->save();

    }

}
