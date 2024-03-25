<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    private $product;
    private $category;

    public function __construct(){
        $this->product = new product();
        $this->category = new Category();
    }

    public function index(){
        $product= $this-> product->get();
        $categories= $this-> category->get();
        return view('Home.index', compact('product', 'categories'));
    }

    public function create(Request $request){
        $this->product->create($request->all());
        return redirect(route('inicio'));
    }

    public function edit($id)
    {
        $product = $this->product->findOrFail($id);

        if($product) return view('Home.edit', compact('product'));

        return redirect(route('inicio'));
    }

    public function update(Request $request, $id)
    {
        $product = $this->product->findOrFail($id);
        if($product) $product->update($request->all());
        return redirect(route('inicio'));
    }

    public function destroy($id)
    {
        $product = $this->product->findOrFail($id);
        if($product->delete());
        return redirect(route('inicio'));
    }
}
