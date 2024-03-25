<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
   private $category;
   
   public function __construct(){
    $this->category= new Category();
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
