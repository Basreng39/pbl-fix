
@extends("layouts.admin.master")

@section('content')

    <div class="container">
        <div class="filters">
            <div class="filter-dropdowns">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle filter-dropdown" type="button" id="tipeKamarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Tipe Kamar
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="tipeKamarDropdown">
                        <!-- Isi dropdown Tipe Kamar -->
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle filter-dropdown" type="button" id="semuaDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Semua
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="semuaDropdown">
                        <!-- Isi dropdown Semua -->
                    </ul>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle filter-dropdown" type="button" id="bulananDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Bulanan
                </button>
                <ul class="dropdown-menu" aria-labelledby="bulananDropdown">
                    <!-- Isi dropdown Bulanan -->
                </ul>
            </div>

            <div class="filter-input">
                <input type="text" class="form-control" placeholder="Rp 0 - Rp 15.000.000">
            </div>

            <button type="button" class="btn filter-btn">Set</button>
        </div>

        <div class="card penyewa-card">
            <img src="path/to/foto.jpg" class="card-img-top" alt="Foto Penyewa">
            <div class="card-body penyewa-details">
                <div class="card-text mb-0 small">Nama Penyewa</div>
                <div class="card-text mb-0 small">No. Kamar</div>
                <div class="card-text mb-0 small penyewa-status">Aktif</div>
            </div>
        </div>

        <!-- Tambahkan lebih banyak div .penyewa-card sesuai dengan jumlah penyewa aktif -->

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function showProfile() {
            console.log("Menampilkan profil pengguna");
        }
</script>
@endsection
