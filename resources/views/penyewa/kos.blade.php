@extends('layouts.penyewa.master')

@section('content')
    <main>
        <div class="container-fluid">
            @include('layouts.penyewa.sidebar')
            <div class="row">
                <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <h2>Kos Saya</h2>

                    <!-- Foto Kos -->
                    <img src="https://via.placeholder.com/800x400" alt="Foto Kos" class="img-fluid mb-3">


                    <!-- Informasi Fasilitas, Tanggungan Pembayaran, Tenggat Pembayaran -->
                    <h5>Fasilitas Kos</h5>
                    <p>Deskripsi fasilitas kos Anda. Contoh: Wi-Fi, AC, Kamar Mandi dalam, dll.</p>

                    <h5>Tanggungan Pembayaran</h5>
                    <p>Deskripsi tanggungan pembayaran. Contoh: Listrik, Air, Internet, dll.</p>

                    <h5>Tenggat Pembayaran</h5>
                    <p>Deskripsi tenggat pembayaran. Contoh: Pembayaran setiap bulan sebelum tanggal 5.</p>

                    <!-- Container Pembayaran -->
                    <div class="card mt-4">
                        <div class="card-header">
                            <h5>Pembayaran</h5>
                        </div>
                        <div class="card-body">
                            <!-- Informasi Pembayaran -->
                            <p>Total Bayar: Rp. XXXX</p>

                            <!-- Tombol Bayar -->
                            <button class="btn btn-primary">Bayar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
