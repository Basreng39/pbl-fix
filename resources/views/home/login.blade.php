<!--Login Penyewa -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap.min.css") }}">
    <style>

        .login-container {
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
        }

        .login-btn {
            background-color: #04C351;
            color: #000000;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2 class="text-center text-black mb-4">Login</h2>

    <form action="/login" method="POST">
        @csrf
        <div class="mb-3 bg-light">
            <input type="text" name="email" class="form-control" id="username" placeholder="Email">
        </div>

        <div class="mb-3 bg-light">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>

        <div class="mb-3">
            <a href="#" class="text-decoration-none text-muted">Lupa kata sandi?</a>
        </div>

        <div class="d-flex justify-content-center mb-3">
            <!-- Menggunakan kelas warna khusus untuk tombol login -->
            <button type="submit" class="btn me-2 login-btn">Login</button>
            <a href="/" type="submit" class=" btn btn-warning">Kembali</a>
        </div>

        <div class="d-flex justify-content-center">
            <p class="text-secondary">Belum Punya Akun? <a href="#" class="text-primary">Daftar</a></p>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
