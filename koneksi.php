<?php //filename: koneksi.php

//1.Koneksi

$db = mysqli_connect("localhost","root","","kalbis_web");

//periksa apakah koneksi berhasil
if(mysqli_connect_errno()){
	//Jika gagal tampilkan pesan error
	die(mysqli_connect_error());
	
}