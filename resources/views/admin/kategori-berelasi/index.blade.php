<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        h1{
            font-size: 80px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
    </style>
</head>
<body>

    <div class="container mt-4">
        <center><h1>Toko Baju</h1></center>
        <h2>Kategori</h2>
        <a href="{{ route('admin.kategori-berelasi.create') }}" style="margin-top: 10px;" class="btn btn-success">Tambah Kategori</a>
        <a href="{{ route('admin.produk-berelasi.index') }}" style="margin-top: 10px;" class="btn btn-success">produk</a>

        <a href="javascript:void(0);" onclick="confirmLogout();" style="color: aliceblue;">
            <button type="submit" class="btn btn-danger" style="float:right; margin-top:10px;">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA2ElEQVR4nO3VMUpDQRCH8V/QdGkEgweJd1BTSQ5hI0RyCrUSBCvxBnl1CCnS23kCLSTeQdAEYcuE7Kx5r8oH0+2fbxlmd9izQ7q4xwSzjHrBaYnkE8tgfeMiIrpLwXcMcbWlrvGaMm8R0TSFRoHMCRap1dnMk+jvprUyLxR1cIbDukWPKVehXafoEj8R2SbRUUaN8JsrWyeqCt7VEg9R0bgpUWOty2Gwq2HYxlNT491BHwe5gVJRK3i++FP9StnwmvjATZ1rovuPxXcuyDFuA6v8Gb2oZI9cVgL1kJA3+TJ2AAAAAElFTkSuQmCC" alt="LOGOUT">
                Logout
            </button>
        </a>
        <script>
            function confirmLogout() {
                if (confirm("Apakah Anda yakin ingin keluar?")) {
                    window.location.href = "/logout"; // Alamat URL logout
                }
            }
        </script>
        
        @if(session('error'))
            <div class="alert alert-danger" style="margin-top: 20px;">
                {{ session('error') }}
            </div>

            @if(session('showErrorAlert'))
                <script>
                    setTimeout(function () {
                        document.querySelector('.alert').style.display = 'none';
                    }, 15000); // Atur waktu tampilan alert (15 detik)
                </script>
            @endif
        @endif

        <table class="table" style="margin-top: 10px;">
            <thead>
                <tr>
                    <th>id kategori</th>
                    <th>Nama Kategori</th>
                    <th>deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategoris as $kategori)
                    <tr>
                        <td>{{ $kategori->id_kategori }}</td>
                        <td>{{ $kategori->nama_kategori }}</td>
                        <td>{{ $kategori->deskripsi_kategori }}</td>
                        <td>
                            <a href="{{ route('admin.kategori-berelasi.edit', $kategori->id_kategori) }}" class="btn btn-warning">Edit</a>
                            <form id="deleteForm" action="{{ route('admin.kategori-berelasi.delete', $kategori->id_kategori) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="confirmDelete(event)">Hapus</button>
                            </form>

                            <script>
                                function confirmDelete(event) {
                                    if (!confirm("Apakah Anda yakin ingin menghapus produk ini?")) {
                                        event.preventDefault(); // Mencegah pengiriman formulir jika pengguna memilih "Cancel"
                                        alert("Penghapusan produk dibatalkan.");
                                        // atau tambahkan tindakan lainnya jika diperlukan
                                    }
                                }
                            </script>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('dashboardadmin') }}" class="btn btn-primary">Kembali</a>
    </div>

    <!-- Sesuaikan dengan library JavaScript yang Anda gunakan, contoh menggunakan Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
