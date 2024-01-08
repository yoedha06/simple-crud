<!-- resources/views/produk/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="path/to/your/styles.css">
    <!-- Jika menggunakan Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="margin-top:40px;">
                    <div class="card-header">Tambah Produk</div>
    
                    <div class="card-body">
                        <form action="{{ route('produk.store') }}" method="POST">
                            @csrf
    
                            <div class="form-group">
                                <label for="id_produk">ID Produk:</label>
                                <input type="text" name="id_produk" id="id_produk" class="form-control" value="{{ old('id_produk') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="nama_produk">Nama Produk:</label>
                                <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="{{ old('nama_produk') }}">
                            </div>

                            <div class="form-group">
                                <label for="id_kategori">Kategori:</label>
                                <select name="id_kategori" id="id_kategori" class="form-control">
                                    @foreach($kategoris as $kategori)
                                        <option value="{{ $kategori->id_kategori }}">{{ $kategori->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
    
                            <div class="form-group">
                                <label for="harga">Harga:</label>
                                <input type="text" name="harga" id="harga" class="form-control" value="{{ old('harga') }}">
                            </div>
    
                            <div class="form-group">
                                <label for="stok">Stok:</label>
                                <input type="text" name="stok" id="stok" class="form-control" value="{{ old('stok') }}">
                            </div>
    
                            <div class="form-group">
                                <label for="keterangan">Keterangan:</label>
                                <textarea name="keterangan" id="keterangan" class="form-control">{{ old('keterangan') }}</textarea>
                            </div>
    
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Tambah Produk</button>
                                <a href="{{ route('produk.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Jika menggunakan Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
