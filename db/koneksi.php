<?php

$host = "localhost";
$user = "master";
$pass = "master";
$name = "pesantren";

$koneksi = mysqli_connect($host,  $user,  $pass) or die("Koneksi ke database gagal!");
mysqli_select_db($koneksi, $name) or die("Tidak ada database yang dipilih!");

?>