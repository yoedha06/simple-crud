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
        <a href="{{ route('kategori.create') }}" style="margin-top: 10px;" class="btn btn-success">Tambah Kategori</a>
        
        {{-- @error('error')
            <div class="alert alert-danger" role="alert">
                {{$message}}

            </div>
        @enderror --}}

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
                            <a href="{{ route('kategori.edit', $kategori->id_kategori) }}" class="btn btn-warning">Edit</a>
                            <form id="deleteForm" action="{{ route('kategori.delete', $kategori->id_kategori) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="confirmDelete()">Hapus</button>
                            </form>
                            <script>
                                function confirmDelete() {
                                    if (confirm("Apakah Anda yakin ingin menghapus produk ini?")) {
                                        document.getElementById('deleteForm').submit();
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
        <a href="{{ route('dashboard') }}" class="btn btn-primary">Kembali</a>
    </div>

    <!-- Sesuaikan dengan library JavaScript yang Anda gunakan, contoh menggunakan Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
