<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama_olahraga'];
$frekuensi = $_POST['frekuensi'];
$durasi = $_POST['durasi'];
$notes = $_POST['notes'];

// menginput data ke database
mysqli_query($koneksi,"insert into kebugaran values('','$nama','$frekuensi','$durasi','$notes')");
 
// mengalihkan halaman kembali ke index.php
header("location:kebugaran.php");
 
?>