<header class="main-header">
    <a href="#"  style="height: 54px" class="logo text-decoration-none">
      <span class="logo-lg me-4"><b>Kos</b> Cantik</span>
    </a>

    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <form class="d-flex " role="search">
        <input class="form-control rounded mx-2" type="search" placeholder="Cari data kamar" aria-label="Search">
      </form>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="nav-item dropdown mx-3">
            <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="hidden-xs">{{ auth()->user()->name }} </span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button class="dropdown-item" type="submit">Sign Out</button>
                    </form>
                </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
</header>
