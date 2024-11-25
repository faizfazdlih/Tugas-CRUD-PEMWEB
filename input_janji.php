<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama_dokter'];
$tanggal = $_POST['tanggal'];
$lokasi = $_POST['lokasi'];
$notes = $_POST['notes'];

// menginput data ke database
mysqli_query($koneksi,"insert into janji_dokter values('','$nama','$tanggal','$lokasi','$notes')");
 
// mengalihkan halaman kembali ke index.php
header("location:tables.php");
 
?>