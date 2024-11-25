<?php
// Include koneksi database
include('koneksi.php');

// Ambil data dari form
$id = $_POST['id'];
$nama = $_POST['nama_dokter'];
$tanggal = $_POST['tanggal_janji'];
$lokasi = $_POST['lokasi'];
$notes = $_POST['notes'];

// Query untuk update data ke dalam database berdasarkan ID
mysqli_query($koneksi, "UPDATE janji_dokter SET nama_dokter = '$nama', tanggal_janji = '$tanggal', lokasi = '$lokasi', notes = '$notes' WHERE id = '$id'");

// Redirect ke halaman tampil.php setelah update berhasil
header("location: tables.php");
?>