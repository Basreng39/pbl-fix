@extends('layouts.penyewa.master')

@section('content')


<main>
    <div class="container-fluid">
        @include('layouts.penyewa.sidebar')
        <div class="row">

            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <h2>Riwayat Transaksi</h2>

                <!-- Container Pembayaran -->
                <div class="card mt-3">
                <div class="row g-3">
                <div class="mb-3">
                  <label  for="Inputtggl" class="form-label">Tanggal Pembayaran</label>
                  <input type="date" id="InputTggl" >
                </div>

                </div>
                </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

@endsection
