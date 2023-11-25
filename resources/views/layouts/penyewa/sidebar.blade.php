<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('penyewa') ? 'active' : '' }}" aria-current="page" href="/penyewa">
            <i style="font-size:24px" class="fa">&#xf0e4;</i> Informasi pribadi
          </a>
        </li>
        <li class="nav-item mt-3">
          <a class="nav-link {{ Request::is('penyewa/kos') ? 'active' : '' }}"  href="/penyewa/kos">
            <i style="font-size:24px" class="fa">&#xf236;</i> Kos Saya
          </a>
        </li>
        <li class="nav-item mt-3">
          <a class="nav-link  {{ Request::is('penyewa/riwayat') ? 'active' : '' }}" href="/penyewa/riwayat">
            <i style="font-size:24px" class="fa">&#xf080;</i> Riwayat Transaksi
          </a>
        </li>
      </ul>
    </div>
  </nav>
