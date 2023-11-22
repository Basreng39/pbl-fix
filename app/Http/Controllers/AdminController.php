<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        return view('dashboard.index',[
            "judul" => "Dashboard Admin"
        ]);
    }

    public function login(){
        return view("dashboard.login",[
            "judul" => "Admin Login"
        ]);
    }

    public function auth(Request $request){
        $valid = $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

        if(Auth::attempt($valid)){
            $request->session()->regenerate();

            return redirect()->intended("/admin");
        }

        return back()->with("fail","Login Gagal");
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/");
    }

    public function laporan(){
        return view("dashboard.laporan",[
            "judul" => "Laporan"
        ]);
    }

    public function pembayaran(){
        return view("dashboard.pembayaran",[
            "judul" => "Pembayaran Kost Online"
        ]);
    }

    public function penyewaAktif(){
        return view ("dashboard.penyewa.aktif",[
            "judul" => "Penyewa Aktif"
        ]);
    }

    public function tambahPenyewa(){
        return view("dashboard.penyewa.tambah_penyewa",[
            "judul" => "Tambah Data Penyewa",
        ]);
    }
}
