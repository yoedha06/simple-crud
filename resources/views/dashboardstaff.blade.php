<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Staff</title>
    <style>
        h1{
            font-size: 80px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        h2 {
            font-size: 50px;
        }
    </style>
</head>
<body>
    <center><h1>Selamat datang staff</h1></center>
    <center><h2>Toko Baju</h2>

    <a href="{{ route('admin.produk-berelasi.index') }}" class="btn btn-info">Produk</a>
    
    <a href="{{ route('admin.kategori-berelasi.index') }}" class="btn btn-info">Kategori</a><br><br>

    <form method="post" action="{{ route('logout') }}" style="display: inline;">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>    
    </center>


     <!-- Sesuaikan dengan library JavaScript yang Anda gunakan, contoh menggunakan Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>