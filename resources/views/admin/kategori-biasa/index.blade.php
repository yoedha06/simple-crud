<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Produk Biasa</title>
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
        <h2>Kategori Biasa</h2>
        <a href="{{ route('admin.kategori-biasa.create') }}" style="margin-top: 10px;" class="btn btn-success">Tambah Kategori</a>
        
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
                @foreach ($kategoribiasa as $kategoribiasa)
                    <tr>
                        <td>{{ $kategoribiasa->id_kategori }}</td>
                        <td>{{ $kategoribiasa->nama_kategori }}</td>
                        <td>{{ $kategoribiasa->deskripsi_kategori }}</td>
                        <td>
                            <a href="{{ route('admin.kategori-biasa.edit', $kategoribiasa->id_kategori) }}" class="btn btn-warning">Edit</a>
                            <form id="deleteForm" action="{{ route('admin.kategori-biasa.delete', $kategoribiasa->id_kategori) }}" method="POST" class="d-inline">
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
