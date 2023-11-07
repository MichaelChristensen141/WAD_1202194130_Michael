<?php
require 'koneksi.php';

$gambar = $_FILES['gambar']['name'];
$nama_barang = $_POST['nama_barang'];
$kode_barang = $_POST['kode_barang'];
$harga_barang = $_POST['harga_barang'];
$stock_barang = $_POST['stock_barang'];

$target = "Assets/";

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $gambar)) {
    $insertQuery = "INSERT INTO produk (gambar, nama_barang, kode_barang, harga_barang, stock_barang) VALUES ('$gambar', '$nama_barang', '$kode_barang', '$harga_barang', '$stock_barang')";

    if (mysqli_query($conn, $insertQuery)) {
        $message = "Data berhasil ditambah.";
    } else {
        $message = "Error inserting data: " . mysqli_error($conn);
    }

    session_start();
    $_SESSION['insert_message'] = $message;
    header("location: Latihan.php");
    }
?>