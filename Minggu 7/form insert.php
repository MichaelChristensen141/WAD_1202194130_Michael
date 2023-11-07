<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4" align="center">Tambah Produk Toko Maggie.com</h1>
    
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tambah Barang</h5>
    
                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="gambar">Gambar:</label>
                        <input type="file" name="gambar" id="gambar" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang:</label>
                        <input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang:</label>
                        <input type="text" name="kode_barang" id="kode_barang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="harga_barang">Harga Barang:</label>
                        <input type="text" name="harga_barang" id="harga_barang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="stock_barang">Stok Barang:</label>
                        <input type="text" name="stock_barang" id="stock_barang" class="form-control" required>
                    </div>
                    <button type="submit" value="insert" class="btn btn-success">Tambah Barang</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
