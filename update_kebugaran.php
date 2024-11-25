<?php
// Include koneksi database
include('koneksi.php');

// Ambil data dari form
$id = $_POST['id'];
$nama = $_POST['nama_olahraga'];
$frekuensi = $_POST['frekuensi'];
$durasi = $_POST['durasi'];
$notes = $_POST['notes'];

// Query untuk update data ke dalam database berdasarkan ID
mysqli_query($koneksi, "UPDATE kebugaran SET nama_olahraga = '$nama', frekuensi = '$frekuensi', durasi = '$durasi', notes = '$notes' WHERE id = '$id'");

// Redirect ke halaman tampil.php setelah update berhasil
header("location: kebugaran.php");
?>