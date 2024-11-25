<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama_obat'];
$dosis = $_POST['dosis'];
$frekuensi = $_POST['frekuensi'];
$mulai = $_POST['start_date'];
$akhir = $_POST['end_date'];

// menginput data ke database
mysqli_query($koneksi,"insert into pengingat_obat values('','$nama','$dosis','$frekuensi','$mulai','$akhir')");
 
// mengalihkan halaman kembali ke index.php
header("location:medic.php");
 
?>