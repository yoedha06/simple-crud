<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk Biasa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="margin-top: 50px;">
                    <div class="card-header">Edit Produk Biasa</div>
    
                    <div class="card-body">
                        <form action="{{ route('admin.produk-biasa.update', $produkbiasa->id_produk) }}" method="POST">
                            @csrf
    
                            <div class="form-group">
                                <label for="id_produk">ID Produk:</label>
                                <input type="text" name="id_produk" class="form-control" value="{{ $produkbiasa->id_produk }}" readonly>
                            </div>
    
                            <div class="form-group">
                                <label for="nama_produk">Nama Produk:</label>
                                <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="{{ $produkbiasa->nama_produk }}">
                            </div>
    
                            <div class="form-group">
                                <label for="harga">Harga:</label>
                                <input type="text" name="harga" id="harga" class="form-control" value="{{ $produkbiasa->harga }}">
                            </div>
    
                            <div class="form-group">
                                <label for="stok">Stok:</label>
                                <input type="text" name="stok" id="stok" class="form-control" value="{{ $produkbiasa->stok }}">
                            </div>
    
                            <div class="form-group">
                                <label for="keterangan">Keterangan:</label>
                                <textarea name="keterangan" id="keterangan" class="form-control">{{ $produkbiasa->keterangan }}</textarea>
                            </div>
    
                            <div class="text-center">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <a href="{{ route('admin.produk-biasa.index') }}" class="btn btn-secondary">Batal</a>
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
