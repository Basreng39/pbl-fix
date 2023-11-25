<nav class="navbar navbar-expand-lg" style="background-color: #D9D9D9">
    <div class="container">
        <div class="search-form">
            <input type="text" class="form-control search-input" placeholder="Cari Tipe Kamar">
            <button type="button" class="btn search-btn">Cari</button>
        </div>
        {{-- <a href="/login" class="text-decoration-none text-dark fs-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg> Login</a> --}}

        @auth
            <ul>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle dropdown-item" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Weclome, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/penyewa">Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"> Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>

        @else
            <a href="/login" class="text-decoration-none text-dark fs-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg> Login</a>
        @endauth
    </div>
</nav>
