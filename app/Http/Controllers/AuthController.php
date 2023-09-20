<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function clientsPage(){
        return view('client');
    }
    
    public function LoginStore(Request $request)
    {
        $clients = $request->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($clients)) {
            $request->session()->regenerate();
 
            return redirect()->route('clientPage');
        }
 
        return back();
    }
}
