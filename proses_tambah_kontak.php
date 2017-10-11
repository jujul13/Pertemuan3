<?php //filename:proses_tambah_kontak.php

// 1. Koneksi
include("koneksi.php");


// 2. Query
// Data dari form
$nama = mysqli_real_escape_string($db, $_POST['nama']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$kategori = mysqli_real_escape_string($db, $_POST['kategori']);

$query = "INSERT INTO kontak (nama, phone, email, kategori_id) VALUES ('$_POST[nama]','$_POST[phone]','$_POST[email]','$_POST[kategori]')";
// Ok, take your newly create variables: 

mysqli_query($db,$query);

header('Location: index.php');
?>