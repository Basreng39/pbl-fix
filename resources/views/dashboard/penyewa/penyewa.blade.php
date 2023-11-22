@extends('layouts.admin.master')

@section('content')
    <div class="container position-relative">

        @if (Session::get('edit'))
            <div class="alert alert-success alert-dismissible fade show col-md-4" role="alert">
                <strong>{{ Session::get('edit') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (Session::get('hapus'))
            <div class="alert alert-success alert-dismissible fade show col-md-4" role="alert">
                <strong>{{ Session::get('hapus') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (Session::get('tambah'))
            <div class="alert alert-success alert-dismissible fade show col-md-4" role="alert">
                <strong>{{ Session::get('tambah') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="col-md-12">
            <div class="mx-3 row g-0 overflow-hidden flex-md-row mb-4 h-md-250 position-relative">

                <div class="m-2 col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary"></strong>
                    <h3 class="mb-3 ">Data Penyewa</h3>
                    <a href="/admin/penyewa/tambah" class="btn btn-outline-primary btn-sm col-lg-2 col-md-2 col-sm-3"><i
                            class="fa fa-plus" aria-hidden="true"></i> Penyewa</a>
                </div>
            </div>
            <h5 class="ms-auto">Total Penyewa aktif :{{ $total }}</h5>
        </div>


        <div class="row">
            {{ $user->links() }}

            @foreach ($user as $k)
                <div class="col-md-4 col-sm-4">

                    <ul class="nav nav-tabs nav-primary" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" href="#K{{ $k->id }}" role="tab" aria-selected="false">

                                <div class=" align-items-center">
                                    <div class="tab-icon">
                                        <i class="fa fa-3x fa-bed" aria-hidden="true"></i><br>
                                    </div>
                                    <div class="text-center tab-title text-danger">
                                        {{ $k->name }} {{ $k->id }}
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>

        @foreach ($user as $k)
            <div class="row mt-4 {{ Request::is('#') ? 'show' : 'd-none' }}" id="DK{{ $k->id }}">

                <div class="card">
                    <div class="row d-flex ">
                        <a href="/admin/penyewa/edit/{{ $k->id }}" class="btn mx-2 col-md-1 btn-warning">Edit</a>
                        <a href="/admin/penyewa/delete/{{ $k->id }}" class="btn col-md-1 btn-danger">Hapus</a>
                    </div>
                    <h5 class="card-header">Nama <b>{{ $k->name }}</b></h5>
                    <div class="card-body">
                        <h3 class="card-title text-bold"> Status {{ $k->status }}</h3>
                        <p class="card-text">Gender: {{ $k->jenis_kelamin }}</p>
                        <p class="card-text">Alamat: {{ $k->alamat }}</p>
                        <p class="card-text">Nomor hp: {{ $k->no_hp }}</p>
                        <p class="card-text">Email: {{ $k->email }}</p>
                        <p class="card-text">Foto :<img src="{{ asset('storage/' . $k->gambar) }}"></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <script src="{{ asset('js/jQuery.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.nav-link').on('click', function(e) {
                e.preventDefault();

                var kamarId = $(this).attr('href').replace('#K', '');

                $('[id^="DK"]').addClass('d-none');

                $('#DK' + kamarId).removeClass('d-none');
            });
        });
    </script>
@endsection
