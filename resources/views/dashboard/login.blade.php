<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $judul }}</title>
    <link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap.min.css") }}">
</head>
<body>
    <div class="container position-absolute top-50 start-50 translate-middle">

        <div class="row justify-content-center">
            <div class="col-md-5">
                    <main class="form-signin ">

                    @if (session()->has("fail"))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session("fail") }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <h1 class="h3 mb-3 fw-normal text-center">Please LogIn</h1>
                    <form action="/admin/login" method="POST">
                        @csrf
                        <div class="form-floating ">
                        <input type="email" name="email" class="mt-4 form-control @error('email') is-invalid @enderror" id="email" required placeholder="name@example.com">
                        <label for="email">Email address</label>
                        @error("email")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="form-floating">
                        <input type="password" name="password" class="form-control mb-4" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    </form>
                </main>
            </div>
        </div>

    </div>
</body>
</html>
