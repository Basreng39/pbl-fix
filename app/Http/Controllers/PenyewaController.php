<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{

    public function penyewa(User $user){
        return view("dashboard.penyewa.penyewa",[
            "judul" => "Data Penyewa",
            "total" => $user->where("status","user")->count(),
            "user" => User::where("status","user")->paginate(12),
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

    public function store(Request $request){
        $data = new User();
        $data->name = $request->nama;
        $data->nik = $request->nik;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->alamat = $request->alamat;
        $data->foto = $request->foto->store("images");
        $data->no_hp = $request->no_hp;
        $data->kampus = $request->kampus;
        $data->status = $request->status;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->save();

        return redirect("/admin/penyewa")->with("tambah","data berhasil di simpan");
    }

    public function edit($id){
        $data = User::find($id);

        return view("dashboard.penyewa.edit",[
            "judul" => "Edit Penyewa",
            "data" => $data
        ]);
    }

    public function update(Request $request,$id){
        $data = User::find($id);
        $data->name = $request->nama;
        $data->nik = $request->nik;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->alamat = $request->alamat;
        $data->foto = $request->foto->store("images");
        $data->no_hp = $request->no_hp;
        $data->kampus = $request->kampus;
        $data->status = $request->status;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->update();

        return redirect("/admin/penyewa")->with("edit","data berhasil di ubah");

    }

    public function destroy($id){
        $data = User::find($id);
        $data->delete();

        return redirect("/admin/penyewa")->with("hapus","data berhasil di hapus");
    }
}
