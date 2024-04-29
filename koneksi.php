<?php 
$koneksi = mysqli_connect("localhost","root","","ti2c_php");
 
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>