<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show()
    {
        $productsList = Product::all();
        return view("/Products/ListProducts", ["productsList" => $productsList]);
    }
    function delete($id)
    {
        //$producto::destroy($id);
        $producto = Product::findOrFail($id);
        $producto->delete();
        return redirect('/ListProducts');
        //return redirect()->('/ListProducts');

    }
    function form($id = null){
        if ($id == null) {
            $product = new Product();
        } else {
            $product = Product::findOrFail($id);
        }

        //$formulario = Product :: get();
        return view('products/form',['product'=> $product]);
    }

    function save(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'cost' => 'required',
            'price' => 'required',
            'quantity' => 'required|numeric',
            'brand' => 'required|max:50'
        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->cost = $request->cost;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->brand = $request->brand;

        $product->save();
        return redirect('/ListProducts')->with('message', 'Producto guardado ');
    }
}
