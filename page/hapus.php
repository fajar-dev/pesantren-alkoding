<?php
//panggil file koneksi.php yang sudah anda buat
include "../db/koneksi.php";

if(($_SESSION['level']) == 'murid') {
  header("Location: home.php");
}

$id=$_GET['id'];   //ambil parameter GET id  dan buat variabel
//gunakan parameter get untuk menghapus data berdasarkan id produk
$hapus = mysqli_query($koneksi, "DELETE FROM tbl_kelas where id='$id'");
header('location: kelas-saya.php?sukses')

?>