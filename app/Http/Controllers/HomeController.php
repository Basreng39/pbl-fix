<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


}
