@extends('layouts.admin.master')

@section('content')
    <div class="container p-5">
        <h3 class="text-center">Tambah Data Penyewa</h3>
        <form action="/admin/penyewa/edit/{{ $data->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="text" name="nik" class="form-control" value="{{ $data->nik }}">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="text" name="nama" class="form-control" value="{{ $data->name }}">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-2 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="date" name="tgl_lahir" class="form-control" value="{{ $data->tgl_lahir }}">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="text" name="jenis_kelamin" class="form-control" value="{{ $data->jenis_kelamin }}">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="text" name="alamat" class="form-control" value="{{ $data->alamat }}">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="text" name="status" class="form-control" value="{{ $data->status }}">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">No HP</label>
                <div class="col-sm-4 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="text" name="no_hp" class="form-control" value="{{ $data->no_hp }}">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">Kampus</label>
                <div class="col-sm-10 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="text" name="kampus" class="form-control" value="{{ $data->kampus }}">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="text" name="username" class="form-control" value="{{ $data->username }}">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="email" name="email" class="form-control" value="{{ $data->email }}">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-4 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="text" name="password" class="form-control" value="{{ $data->password }}">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">Upload KTP</label>
                <div class="col-sm-10 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="file" name="foto" class="form-control">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-dark">Ubah</button>
                <a href="/admin/penyewa" class="btn btn-warning">Kembali</a>
            </div>
        </form>
    </div>
@endsection
