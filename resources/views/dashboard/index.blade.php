@extends('layouts.admin.master')

@section('content')
    <div class="card position-absolute translate-middle" style="top: 50%; left: 55%">
        <div class="card-header text-center fs-3">
            Profil Admin
        </div>
        <div class="card-body" style="width: 100vmin">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td>{{ auth()->user()->name }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{ auth()->user()->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Nomor</td>
                        <td>{{ auth()->user()->no_hp }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>{{ auth()->user()->status }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
