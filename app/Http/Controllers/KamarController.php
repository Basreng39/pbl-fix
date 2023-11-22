<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{

    public function kamar(Kamar $kamar){

        return view('dashboard.kamar.kamar',[
            "judul" => "Data Kamar",
            "total" => $kamar->all()->count(),
            "kamar" => Kamar::latest()->paginate(12),

        ]);
    }

    public function tambahKamar(){
        return view("dashboard.kamar.tambah_kamar",[
            "judul" => "Tambah Kamar"
        ]);
    }

    public function store(Request $request){
        // return $request->file("gambar")->store("images");

        $data = new Kamar();
        $data->nama_kamar = $request->nama_kamar;
        $data->jenis = $request->jenis;
        $data->status = $request->status;
        $data->harga = $request->harga;
        $data->gambar = $request->gambar->store("images");
        $data->keterangan = $request->detail;
        $data->save();

        return redirect("/admin/kamar")->with("tambah","data berhasil di simpan");
    }

    public function update(Request $request,$id){
        $data = Kamar::find($id);
        $data->nama_kamar = $request->nama_kamar;
        $data->jenis = $request->jenis;
        $data->status = $request->status;
        $data->harga = $request->harga;
        $data->gambar = $request->gambar->store("images");
        $data->keterangan = $request->detail;
        $data->update();

        return redirect("/admin/kamar")->with("edit","data berhasil di ubah");
    }

    public function edit($id){
        $val = Kamar::find($id);

        return view("dashboard.kamar.edit",[
            "judul" => "Edit data kamar",
            "data" => $val
        ]);
    }

    public function destroy($id){
        $data = Kamar::find($id);
        $data->delete();

        return redirect("/admin/kamar")->with("hapus","data berhasil di hapus");
    }
}
