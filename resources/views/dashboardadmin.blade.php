<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>admin</title>
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
    <center><h1>Selamat datang admin</h1></center>
    <center><h2>Toko baju</h2>
    <br>
    <a href="{{ route('admin.produk-berelasi.index') }}" class="btn btn-primary">Produk</a>
    <a href="{{ route('admin.kategori-berelasi.index') }}" class="btn btn-primary">Kategori</a>

    <a href="{{ route('admin.produk-biasa.index') }}" class="btn btn-primary">Produk biasa</a>
    <a href="{{ route('admin.kategori-biasa.index') }}" class="btn btn-primary">Kategori biasa</a><br><br>
    
    <a href="javascript:void(0);" onclick="confirmLogout();" style="color: aliceblue;">
        <button type="submit" class="btn btn-danger">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA2ElEQVR4nO3VMUpDQRCH8V/QdGkEgweJd1BTSQ5hI0RyCrUSBCvxBnl1CCnS23kCLSTeQdAEYcuE7Kx5r8oH0+2fbxlmd9izQ7q4xwSzjHrBaYnkE8tgfeMiIrpLwXcMcbWlrvGaMm8R0TSFRoHMCRap1dnMk+jvprUyLxR1cIbDukWPKVehXafoEj8R2SbRUUaN8JsrWyeqCt7VEg9R0bgpUWOty2Gwq2HYxlNT491BHwe5gVJRK3i++FP9StnwmvjATZ1rovuPxXcuyDFuA6v8Gb2oZI9cVgL1kJA3+TJ2AAAAAElFTkSuQmCC" alt="LOGOUT">
            Logout
        </button>
    </a>
    <script>
        function confirmLogout() {
            if (confirm("Apakah Anda yakin ingin keluar?")) {
                window.location.href = "/logout"; // Alamat URL logout
            }
        }
    </script>
    
    </center>

    <!-- Sesuaikan dengan library JavaScript yang Anda gunakan, contoh menggunakan Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>