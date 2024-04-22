<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function create(){

        return view('product.create');

    }

    public function store(ProductRequest $request){

        $name = $request->name;
        $description = $request->description;
        $price = $request->price;
        $img= null;

        if ($request->file('img')){
            $img = $request->file('img')->store('public/img');// metodo file mi cattura il file della request perche è un file piu complesso ed il medoto store me lo va a salvare nella cartella img che sta dentro a public
        }

        $product = new Product();

        $product->name = $name;
        $product->description = $description;
        $product->price = $price;
        $product->img = $img;

        $product->save();

        return redirect()->back()->with('message', 'Prodotto inserito');
    }

    public function index(){

        $products = Product::all();

        return view('product.index' , ['products' => $products]);

    }

    public function show(Product $product)
    {
        return view('product.show' , compact('product'));
    }
}
