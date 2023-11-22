<aside class="main-sidebar">
    <section class="sidebar"  style="height: 100vh">

      <ul class="sidebar-menu">
        <li class="header">NAVIGASI UTAMA</li>
        <li class="treeview {{ $judul === 'Dashboard Admin' ? 'active' : '' }}">
          <a href="/admin" class="text-decoration-none">
            <i class="fa fa-dashboard "></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview {{ $judul === 'Data Kamar' ? 'active' : '' }}">
          <a href="/admin/kamar" class="text-decoration-none">
			    <i class="fa fa-bed"></i>
            <i></i> <span>Kamar</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#" class="text-decoration-none">
            <i class="fa fa-table"></i> <span>Penyewa</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/penyewa/aktif" class="text-decoration-none"><i class="fa fa-circle-o"></i>Penyewa Aktif</a></li>
            <li><a href="#riwayat" class="text-decoration-none"><i class="fa fa-circle-o"></i>Riwayat Penyewa</a></li>
            <li><a href="/admin/penyewa/tambah" class="text-decoration-none"><i class="fa fa-circle-o"></i>Tambah Penyewa</a></li>
          </ul>
        </li>

        <li class="treeview">
            <a href="/admin/pembayaran" class="text-decoration-none">
                  <i class="fa fa-bitcoin"></i>
              <i></i> <span>Pembayaran</span>
            </a>
        </li>

        <li class="treeview">
          <a href="/admin/laporan" class="text-decoration-none">
            <i class="fa fa-file"></i> <span>Laporan</span>
          </a>
        </li>
      </ul>
    </section>
</aside>
