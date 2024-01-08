<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="margin-top: 50px;">
                    <div class="card-header">Edit Produk</div>
    
                    <div class="card-body">
                        <form action="{{ route('produk.update', $produk->id_produk) }}" method="POST">
                            @csrf
    
                            <div class="form-group">
                                <label for="id_produk">ID Produk:</label>
                                <input type="text" name="id_produk" class="form-control" value="{{ $produk->id_produk }}" readonly>
                            </div>
    
                            <div class="form-group">
                                <label for="nama_produk">Nama Produk:</label>
                                <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="{{ $produk->nama_produk }}">
                            </div>
    
                            <div class="form-group">
                                <label for="harga">Harga:</label>
                                <input type="text" name="harga" id="harga" class="form-control" value="{{ $produk->harga }}">
                            </div>
    
                            <div class="form-group">
                                <label for="stok">Stok:</label>
                                <input type="text" name="stok" id="stok" class="form-control" value="{{ $produk->stok }}">
                            </div>
    
                            <div class="form-group">
                                <label for="keterangan">Keterangan:</label>
                                <textarea name="keterangan" id="keterangan" class="form-control">{{ $produk->keterangan }}</textarea>
                            </div>
    
                            <div class="form-group">
                                <label for="id_kategori">Kategori:</label>
                                <select name="id_kategori" id="id_kategori" class="form-control">
                                    @foreach($kategoris as $kategori)
                                        <option value="{{ $kategori->id_kategori }}" @if($kategori->id_kategori == $produk->id_kategori) selected @endif>{{ $kategori->nama_kategori }}</option>
                                    @endforeach
                                </select>
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
                                <a href="{{ route('produk.index') }}" class="btn btn-secondary">Batal</a>
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
