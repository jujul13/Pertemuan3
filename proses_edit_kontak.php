<?php
	// 1. koneksi
	include("koneksi.php");
	
	//2. data dari form
	$id = $_POST['id'];
	$nama = mysqli_real_escape_string($db, $_POST['nama']);
	$phone = mysqli_real_escape_string($db, $_POST['phone']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$kategori = mysqli_real_escape_string($db, $_POST['kategori']);

	//3. query
	$query = "UPDATE kontak  SET nama= '$_POST[nama]', phone = '$_POST[phone]', email ='$_POST[email]', kategori_id = '$_POST[kategori]'
			  WHERE id='$id'";
	
	mysqli_query($db, $query);
	header('Location: index.php');
?>