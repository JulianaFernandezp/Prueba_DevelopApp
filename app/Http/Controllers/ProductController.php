<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    private $product;

    public function __construct(){
        $this->product = new product();
    }

    public function index(){
        $product= $this-> product->get();
        return view('Home.index', compact('product'));
    }

    public function create(Request $request){
        $this->product->create($request->all());
        return redirect(route('inicio'));
    }

    /*public function edit($id)
    {
        $product = $this->product->findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = $this->product->findOrFail($id);
        $product->update($request->all());
        return redirect(route('inicio'));
    }

    public function destroy($id)
    {
        $product = $this->product->findOrFail($id);
        $product->delete();
        return redirect(route('inicio'));
    }*/
}
