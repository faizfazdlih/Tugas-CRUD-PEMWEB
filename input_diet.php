<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$tipe_makanan = $_POST['tipe_makanan'];
$nama_makanan = $_POST['nama_makanan'];
$kalori = $_POST['kalori'];


// menginput data ke database
mysqli_query($koneksi,"INSERT INTO diet (tipe_makanan, nama_makanan, kalori) VALUES ('$tipe_makanan', '$nama_makanan', '$kalori')");
 
// mengalihkan halaman kembali ke index.php
header("location:diet.php");
 
?>