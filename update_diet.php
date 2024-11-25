<?php
// Include koneksi database
include('koneksi.php');

// Ambil data dari form
$id = $_POST['id'];
$tipe = $_POST['tipe_makanan'];
$nama = $_POST['nama_makanan'];
$kalori = $_POST['kalori'];

// Query untuk update data ke dalam database berdasarkan ID
mysqli_query($koneksi, "UPDATE diet SET tipe_makanan = '$tipe', nama_makanan = '$nama', kalori = '$kalori' WHERE id = '$id'");

// Redirect ke halaman tampil.php setelah update berhasil
header("location: diet.php");
?>