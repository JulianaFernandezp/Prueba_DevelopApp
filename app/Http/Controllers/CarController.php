<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    private $car;
    public function __construct(){
     $this->car= new Car();
    }

    public function index(){
    $user=auth()->user()->id;
    $products= $this->car->with('product')->where('user_id', $user)->get();
    return view ('Home.cart', compact('products'));
    }

    public function create(Request $request){
     $user=auth()->user()->id;
     $this->car->create(['user_id'=>$user, 'product_id'=>$request->product_id, 'cantidad'=>$request->cantidad]);
     return redirect(route('inicio'));
    }


public function update(Request $request, $id)
{
    $car = $this->car->findOrFail($id);
    if($car) $car->update($request->all());
    return redirect(route('cart'));
}

public function destroy($id)
{
    $car = $this->car->findOrFail($id);
    if($car->delete());
    return redirect(route('cart'));
}

}
