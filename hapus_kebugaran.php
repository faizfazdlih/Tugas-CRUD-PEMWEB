<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
$query = "DELETE FROM kebugaran WHERE id = '$id'";

 
// mengalihkan halaman kembali ke index.php
if ($koneksi->query($query)){
    header("location:kebugaran.php");
    
}else{
    echo"error: " . $koneksi->error;
}
    
 
?>