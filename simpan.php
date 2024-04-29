<?php
include "koneksi.php";
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$ttl = $_POST['ttl'];
$jk = $_POST['jk'];
$usia = $_POST['usia'];
$query = mysqli_query($koneksi, "insert into mahasiswa(nim,nama,alamat,ttl,jk,usia)value('$nim','$nama','$alamat','$ttl','$jk','$usia')");
header('location:index.php');
?>