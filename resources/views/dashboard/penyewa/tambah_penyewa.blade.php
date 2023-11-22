@extends('layouts.admin.master')

@section('content')

    <div class="container p-5">
        <h3 class="text-center">Tambah Data Penyewa</h3>
        <form class="">
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-2 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="date" class="form-control">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">No HP</label>
                <div class="col-sm-4 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">Kampus</label>
                <div class="col-sm-10 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-4 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label for="" class="col-sm-2 col-form-label">Upload KTP</label>
                <div class="col-sm-10 d-flex">
                    <div class="mr-2 align-self-center me-3">:</div>
                    <input type="file" class="form-control">
                </div>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-dark">SELESAI</button>
            </div>
        </form>
    </div>
@endsection
