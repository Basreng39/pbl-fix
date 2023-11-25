@extends('layouts.penyewa.master')

@section('content')
    <div class="container-fluid">
        @include('layouts.penyewa.sidebar')

        <div class="row">
            <div class="col-md-9 ms-sm-auto col-lg-10 ">

                <div class="card mt-4">
                    <div class="mb-3">
                        <label for="Inputnamalengkap" class="form-label">Nama Lengkap</label>
                        <input class="form-control" id="disabledInput" type="text" value="{{ auth()->user()->name }}"
                            disabled>
                    </div>
                    <div class="mb-3">
                        <label for="InputNIK" class="form-label">NIK</label>
                        <input class="form-control" id="disabledInput" type="text" value="{{ auth()->user()->nik }}"
                            disabled>
                    </div>
                    <div class="mb-3">
                        <label for="Inputtgllahir" class="form-label">Tanggal Lahir</label>
                        <input class="form-control" id="disabledInput" type="text" value="{{ auth()->user()->tgl_lahir }}"
                            disabled>
                    </div>
                    <div class="mb-3">
                        <label for="InputJeniskelamin" class="form-label">Jenis Kelamin</label>
                        <input class="form-control" id="disabledInput" type="text" value="{{ auth()->user()->jenis_kelamin }}"
                            disabled>
                    </div>
                    <div class="mb-3">
                        <label for="InputAlamat" class="form-label">Alamat</label>
                        <input class="form-control" id="disabledInput" type="text" value="{{ auth()->user()->alamat }}"
                            disabled>
                    </div>
                    <div class="mb-3">
                        <label for="InputNohp" class="form-label">No hp</label>
                        <input class="form-control" id="disabledInput" type="text" value="{{ auth()->user()->no_hp }}"
                            disabled>
                    </div>
                    <div class="mb-3">
                        <label for="InputStatus" class="form-label">Status</label>
                        <input class="form-control" id="disabledInput" type="text" value="{{ auth()->user()->status }}"
                            disabled>
                    </div>
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Email</label>
                        <input class="form-control" id="disabledInput" type="text" value="{{ auth()->user()->email }}"
                            disabled>
                    </div>
                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Password</label>
                        <input class="form-control" id="disabledInput" type="text" value="{{ auth()->user()->password }}"
                            disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
