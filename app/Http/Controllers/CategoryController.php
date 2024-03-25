<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
   private $category;
   private $product;
   
   public function __construct(){
    $this->category= new Category();
    $this->product= new Product();


   }

   public function index($id){
    $product= $this-> product->where('category_id', $id)->get();
    $categories= $this-> category->get();
    return view('Home.productos', compact('product', 'categories'));
}

   public function create(Request $request){
    $this->category->create($request->all());
    return redirect(route('inicio'));
}

public function edit($id)
{
    $category = $this->category->findOrFail($id);

    if($category) return view('Home.editcategoria', compact('category'));

    return redirect(route('inicio'));
}

public function update(Request $request, $id)
{
    $category = $this->category->findOrFail($id);
    if($category) $category->update($request->all());
    return redirect(route('inicio'));
}

public function destroy($id)
{
    $category = $this->category->findOrFail($id);
    if($category->delete());
    return redirect(route('inicio'));
}

}
