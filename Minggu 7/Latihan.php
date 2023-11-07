<?php
require'koneksi.php';
?>

    <?php
        session_start();

        if (isset($_SESSION['delete_message'])) {
            $message = $_SESSION['delete_message'];
            echo "<div class='alert alert-success'>$message</div>";

            unset($_SESSION['delete_message']);
        }

        if (isset($_SESSION['edit_message'])) {
            $message = $_SESSION['edit_message'];
            echo "<div class='alert alert-success'>$message</div>";
        
            unset($_SESSION['edit_message']);
        }

        if (isset($_SESSION['insert_message'])) {
            $message = $_SESSION['insert_message'];
            echo "<div class='alert alert-success'>$message</div>";
        
            unset($_SESSION['insert_message']);
        }
        
    ?>

<html lang="en">
<head>
    <title>Halaman Barang</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<h1 align="center">Daftar Barang Toko Maggie.com</h1>
<a style="margin: 20 auto; display: block; width: fit-content;" href="form insert.php" class="btn btn-success">Tambah Barang</a>

<table align="center" border="1" cellpadding="20" cellspacing="0">
    <tr align="center">
        <th>No.</th>
        <th>Gambar</th>
        <th>Nama Barang</th>
        <th>Kode Barang</th>
        <th>Harga Barang</th>
        <th>Stok Barang</th> 
        <th>Aksi</th>
    </tr>

    <tr>
        <?php $i = 1;
        $result = mysqli_query($conn,"SELECT * FROM produk");
        while($produk = mysqli_fetch_array($result)){
        ?>
        <td><?php echo $i++;?></td>
        <td><?="<img src='Assets/".$produk['gambar']."'style='width:150px; height:150px;'>"?></td>
        <td align="center"><?php echo $produk['nama_barang'];?></td>
        <td align="center"><?php echo $produk['kode_barang'];?></td>
        <td align="center"><?php echo $produk['harga_barang'];?></td>
        <td align="center"><?php echo $produk['stock_barang'];?></td>
        <td>
            <a href="form edit.php?id=<?php echo $produk['no']; ?>" class="btn btn-primary">Ubah</a>
            <a href="hapus.php?id=<?php echo $produk['no']; ?>" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>