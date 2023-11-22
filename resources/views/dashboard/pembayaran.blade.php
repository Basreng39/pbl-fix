@extends("layouts.admin.master")

@section('content')

    <div class="row">
        <div class="col-md-6 m-4">
            <h2>Pembayaran Kost Online - Admin</h2>
        </div>
    </div>

    <div class="container">

        <section>
            <h3>Data Pembayaran</h3>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Penyewa</th>
                        <th>Total Pembayaran</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data pembayaran ditampilkan di sini -->
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>$500</td>
                        <td>2023-01-01</td>
                        <td>Pending</td>
                        <td>
                            <button>Proses Pembayaran</button>
                        </td>
                    </tr>
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>
        </section>
    </div>
@endsection
