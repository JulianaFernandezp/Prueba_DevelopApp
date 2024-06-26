<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function login(Request $request)  {

   if(Auth::attempt([
      'email'=>$request->email,
      'password'=>$request->password]))
    {
        return redirect(route('inicio'));
    }  }

    public function logout (Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }

};

