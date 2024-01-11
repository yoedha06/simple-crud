<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori biasa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="margin-top: 50px;">
                    <div class="card-header">Edit Kategori biasa</div>

                    <div class="card-body">
                        <form action="{{ route('admin.kategori-biasa.update', ['id_kategori' => $kategoribiasa->id_kategori]) }}" method="POST">
                            @csrf
                        
                            <div class="form-group">
                                <label for="id_kategori">ID Kategori:</label>
                                <input type="text" name="id_kategori" id="id_kategori" class="form-control" value="{{ $kategoribiasa->id_kategori }}" readonly>
                            </div>
                            
                            <div class="form-group">
                                <label for="nama_kategori">Nama Kategori:</label>
                                <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="{{ $kategoribiasa->nama_kategori }}">
                            </div>
                        
                            <div class="form-group">
                                <label for="deskripsi_kategori">Deskripsi:</label>
                                <input type="text" name="deskripsi_kategori" id="deskripsi_kategori" class="form-control" value="{{ $kategoribiasa->deskripsi_kategori }}">
                            </div>
                        
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="{{ route('admin.kategori-biasa.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sesuaikan dengan library JavaScript yang Anda gunakan, contoh menggunakan Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
