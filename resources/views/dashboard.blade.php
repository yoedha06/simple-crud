<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Baju</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        h1{
            font-size: 80px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
    </style>
</head>
<body><br><br><br><br><br><br><br><br><br>
<center>
    <h1>Toko baju</h1>
    <br>
    <a href="{{ route('produk.index') }}" class="btn btn-primary">Produk</a>
    <a href="{{ route('kategori.index') }}" class="btn btn-primary">Kategori</a>
</center>
</body>
</html>