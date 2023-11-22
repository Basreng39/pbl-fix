<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('home.index',[
            "title" => "KOSCantik Kediri",
        ]);
    }

    public function login(){
        return view("home.login",[
            "title" => "Login User"
        ]);
    }

    public function auth(Request $request ){

        $valid = $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

        if(Auth::attempt($valid)){
            $request->session()->regenerate();

            return redirect()->intended("/penyewa");
        }

        return back()->with("fail","Login Gagal");
    }
}
