<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    public function index(){
        return view("penyewa.index", [
            "title" => "Dashbord penyewa"
        ]);
    }

    public function kosSaya(){
        return view("penyewa.kos",[
            "title" => "Kos Penyewa"
        ]);
    }

    public function riwayat(){
        return view("penyewa.riwayat",[
            "title" => "Riwayat Penyewa"
        ]);
    }
}
