@extends('layouts.penyewa.master')

@section('content')

    <div class="container-fluid">
        @include('layouts.penyewa.sidebar')

        <div class="row">
            <div class="col-md-9 ms-sm-auto col-lg-10 ">
            <form>
            <div class="card mt-4">
            <div class="mb-3">
            <label  for="Inputnamalengkap" class="form-label">Nama Lengkap</label>
                <input  id="Inputnamalengkap" >
            </div>
            <div class="mb-3">
            <label for="InputNIK" class="form-label">NIK</label>
            <input  id="InputNIK">
            </div>
            <div class="mb-3">
            <label for="Inputtgllahir" class="form-label">Tanggal Lahir</label>
            <input  id="Inputtgllahir">
            </div>
            <div class="mb-3">
            <label for="InputJeniskelamin" class="form-label">Jenis Kelamin</label>
                <select id="InputJeniskelamin" name="jeniskelamin">
                <option value="Laki - Laki">Laki - Laki</option>
                <option value="Wanita ">Wanita</option>
                </select>
            </div>
            <div class="mb-3">
            <label for="InputAlamat" class="form-label">Alamat</label>
            <input  id="InputAlamat">
            </div>
            <div class="mb-3">
            <label for="InputNohp" class="form-label">No hp</label>
            <input  id="InputNohp">
            </div>
            <div class="mb-3">
            <label for="InputStatus" class="form-label">Status</label>
            <input  id="InputStatus">
            </div>
            <div class="mb-3">
            <label for="InputEmail" class="form-label">Email</label>
            <input  id="InputEmail">
            </div>
            <div class="mb-3">
            <label for="InputPassword" class="form-label">Password</label>
            <input  id="InputPassword">
            </div>
            </div>
            <button  href="#" class="btn btn-secondary">Batal</button>
            <button href="#" class="btn btn-primary">Simpan</button>
            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
