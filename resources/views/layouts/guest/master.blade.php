<!--Home -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Kos</title>
    <link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/guest.css") }}">
</head>
<body>

@include('layouts.guest.navbar')


<div class="container">
    @yield('content')


</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function showProfile() {
        console.log("Menampilkan profil pengguna");
    }
</script>
</body>
</html>
