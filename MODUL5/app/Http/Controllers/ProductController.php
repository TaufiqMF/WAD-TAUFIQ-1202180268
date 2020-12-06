<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product', ['products' => $products]);
    }

    public function index2(){
        $products = Product::all();
        return view('order', ['products' => $products]);
    }

    public function detail_order($id){
        $product = Product::find($id);
        return view('detail_order', ["product" => $product]);
    }

    public function create(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'img_path' => 'required'
        ]);

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'stock' => $request->stock,
            'img_path' => $request->img_path
        ]);
        return redirect('/product');
    }

    public function delete($id){
        $item = Product::find($id);
        $item->delete();
        return redirect('/product');
    }

    public function update($id){ 
        $product = Product::find($id);
        return view('edit_product', ["product" => $product]);
    }

    public function updates($id, Request $request){ 
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'img_path' => 'required'
        ]);

        $item = Product::find($id);
        $item->name = $request->name;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->stock = $request->stock;
        $item->img_path = $request->image;
        $item->save();
        return redirect('/product');
    }
}
