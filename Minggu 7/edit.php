<?php
require 'koneksi.php';

$id = $_POST['id'];
$gambar = $_FILES['gambar']['name'];
$nama_barang = $_POST['nama_barang'];
$kode_barang = $_POST['kode_barang'];
$harga_barang = $_POST['harga_barang'];
$stock_barang = $_POST['stock_barang'];

$target = "Assets/";

if ($_FILES['gambar']['name'] !== '') {
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $gambar)) {
        $editQuery = "UPDATE produk SET gambar='$gambar', nama_barang='$nama_barang', kode_barang='$kode_barang', harga_barang='$harga_barang', stock_barang='$stock_barang' WHERE no = $id";
    } else {
        echo "Error uploading the file.";
    }
} else {
    $editQuery = "UPDATE produk SET nama_barang='$nama_barang', kode_barang='$kode_barang', harga_barang='$harga_barang', stock_barang='$stock_barang' WHERE no = $id";
}

if (mysqli_query($conn, $editQuery)) {
    $message = "Data berhasil diubah.";
} else {
    $message = "Error editing data: " . mysqli_error($conn);
}

session_start();
$_SESSION['edit_message'] = $message;
header("location: Latihan.php");
?>