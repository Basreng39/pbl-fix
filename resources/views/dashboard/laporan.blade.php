@extends('layouts.admin.master')

@section('content')

<div class="container position-relative">

    <div class="col-md-12">
        <div class="mx-3 row g-0 overflow-hidden flex-md-row h-md-250 position-relative">
          <div class="m-2 col pt-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary"></strong>
            <h3 class="mb-3 border-bottom">Laporan</h3>
            {{-- <a href="/admin/tambah" class="btn btn-outline-primary btn-sm col-lg-1 col-md-2 col-sm-3"><i class="fa fa-plus" aria-hidden="true"></i> Kamar</a> --}}
          </div>
        </div>
    </div>

    <div class="row g-3 mb-4">
        <div class="col">
          <input type="text" class="form-control" placeholder="Hari" aria-label="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Bulan" aria-label="Last name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Tahun" aria-label="Last name">
        </div>
        <div class="col">
          <input type="date" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-success">Cari</button>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
              <th scope="col">Tanggal</th>
              <th scope="col">Nama Penyewa</th>
              <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <th scope="row">17-10-2023</th>
              <td>
                User 1<br>
                User2
              </td>
              <td>-</td>
            </tr>
        </tbody>
    </table>
</div>


@endsection
