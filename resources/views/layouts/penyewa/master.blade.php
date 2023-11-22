<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    {{-- cloudflare cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- Boostrap css --}}
    <link href="{{ asset("bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    {{-- Bootsrap Icon --}}
    <link rel="stylesheet" href="{{ asset("css/bsIcaon.css") }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- SB Admin CSS -->
    <link rel="stylesheet" href="https://cdn.startbootstrap.com/sb-admin/css/sb-admin.css">


    {{-- My css Style --}}
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("css/sidebar.css") }}">

</head>
<body>
    @include('layouts.penyewa.navbar')
    @yield('content')
</body>

{{-- Bootstrap js --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

{{-- My Js Style --}}
<script src="{{ asset("js/sidebar.js") }}"></script>
<script src="{{ asset("js/db.js") }}"></script>
</html>
