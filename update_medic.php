<?php
// Include koneksi database
include('koneksi.php');

// Ambil data dari form
$id = $_POST['id'];
$nama = $_POST['nama_obat'];
$dosis = $_POST['dosis'];
$frekuensi = $_POST['frekuensi'];
$mulai = $_POST['start_date'];
$akhir = $_POST['end_date'];

// Query untuk update data ke dalam database berdasarkan ID
mysqli_query($koneksi, "UPDATE pengingat_obat SET nama_obat = '$nama', dosis = '$dosis', frekuensi = '$frekuensi', start_date = '$mulai', end_date = '$akhir' WHERE id = '$id'");

// Redirect ke halaman tampil.php setelah update berhasil
header("location: medic.php");
?>