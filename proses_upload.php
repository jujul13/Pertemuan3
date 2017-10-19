<?php //filename: proses_upload.php

// Dapatkan extensi dari file yang diupload
$ext = explode(".", $_FILES['gambar']['name']);
$ext = end($ext);
echo $ext;

// deklarasi daftar extensi yang diperbolehkan
$ext_boleh = Array("jpg", "png", "gif");
// cek apakah extensi file ada di dalam list
// dapatkan ukuran file:
$size = $_FILES['gambar']['size'];
$sumber = $_FILES['gambar']['tmp_name'];
$tujuan = "uploads/" . $_FILES['gambar']['name'];
if(in_array($ext, $ext_boleh) && $size <= 2*1024*1024){
	echo "file valid";
	move_uploaded_file($sumber, $tujuan);
	
	// QUERY INSERT DI SINI
	
}else{
	echo "file ditolak";
}