<!-- resources/views/produk/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:70px;">
                <div class="card-header">Tambah Kategori</div>

                <div class="card-body">
                    <form action="{{ route('kategori.store') }}" method="POST">
                        @csrf
                    
                        <div class="form-group">
                            <label for="id_kategori">ID Kategori:</label>
                            <input type="text" name="id_kategori" id="id_kategori" class="form-control" value="{{ old('id_kategori') }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="nama_kategori">Nama Kategori:</label>
                            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="{{ old('nama_kategori') }}">
                        </div>
                    
                        <div class="form-group">
                            <label for="deskripsi_kategori">Deskripsi:</label>
                            <input type="text" name="deskripsi_kategori" id="deskripsi_kategori" class="form-control" value="{{ old('deskripsi_kategori') }}">
                        </div>
                    
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Tambah kategori</button>
                            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
