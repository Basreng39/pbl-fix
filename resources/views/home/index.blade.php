{{-- @dd($data) --}}
@extends('layouts.guest.master')


@section('content')

    <div class="filters">
        <div class="filter-dropdowns">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle filter-dropdown" type="button" id="tipeKamarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Tipe Kamar
                </button>
                <ul class="dropdown-menu" aria-labelledby="tipeKamarDropdown">
                    <!-- Isi dropdown Tipe Kamar -->
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle filter-dropdown" type="button" id="semuaDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Semua
                </button>
                <ul class="dropdown-menu" aria-labelledby="semuaDropdown">
                <!-- Isi dropdown Semua -->
                </ul>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle filter-dropdown" type="button" id="bulananDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Bulanan
            </button>
            <ul class="dropdown-menu" aria-labelledby="bulananDropdown">
                <!-- Isi dropdown Bulanan -->
            </ul>
        </div>

        <div class="filter-input">
            <input type="text" class="form-control" placeholder="Rp 0 - Rp 15.000.000">
        </div>

        <button type="button" class="btn filter-btn">Set</button>
    </div>

     <div class="container mt-3">
        <div class="row">
            @foreach ($data as $kamar)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $kamar->gambar) }}">

                        <div class="card-body">
                            <div class="card-text mb-0 small">Tipe Kamar {{ $kamar->jenis }}</div>
                            <div class="card-text mb-0 small">Fasilitas Kos {{ $kamar->keterangan }}</div>
                            <div class="card-text mb-0 small">Harga Kos {{ $kamar->harga }}</div>
                            <a href="#" class="mt-2 btn btn-primary">Hubungi Pemilik</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
