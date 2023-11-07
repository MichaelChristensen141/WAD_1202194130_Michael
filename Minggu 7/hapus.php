<?php
require 'koneksi.php';

$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM produk WHERE no = '$id'")) {
    $message = "Data berhasil dihapus.";
} else {
    $message = "Error deleting data: " . mysqli_error($conn);
}

session_start();
$_SESSION['delete_message'] = $message;
header("location: Latihan.php");
?>
