<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk Biasa</title>
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
        <h2>Produk Biasa</h2>
        <a href="{{ route('admin.produk-biasa.create') }}" style="margin-top: 10px;" class="btn btn-success">Tambah Produk</a>
    
        <table class="table" style="margin-top: 10px;">
            <thead>
                <tr>
                    <th>id produk</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produkbiasa as $produkbiasa)
                    <tr>
                        <td>{{ $produkbiasa->id_produk }}</td>
                        <td>{{ $produkbiasa->nama_produk }}</td>
                        <td>{{ $produkbiasa->harga }}</td>
                        <td>{{ $produkbiasa->stok }}</td>
                        <td>{{ $produkbiasa->keterangan }}</td>
                        <td>
                            <a href="{{ route('admin.produk-biasa.edit', $produkbiasa->id_produk) }}" class="btn btn-warning">Edit</a>
                            <form id="deleteForm-{{ $produkbiasa->id_produk }}" action="{{ route('admin.produk-biasa.delete', $produkbiasa->id_produk) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="confirmDelete('{{ $produkbiasa->id_produk }}')">Hapus</button>
                            </form>
                            
                            <script>
                                function confirmDelete(id_produk) {
                                    if (confirm("Apakah Anda yakin ingin menghapus produk ini?")) {
                                        document.getElementById('deleteForm-' + id_produk).submit();
                                    } else {
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
