<?php //filename: proses_login.php
session_start();

// Ambil data dari form :
$user = $_POST['username'];
$pass = $_POST['password'];

// buat koneksi
$koneksi = mysqli_connect('localhost','root','','kalbis_web');

//query data yang usernamenya sama
$query = "SELECT * FROM users WHERE username = '$user'";
$hasil = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($hasil);

// Periksa apakah querynya ada
 if($row && password_verify($pass, $row['password'])){
	 // Kalau ada, maka cek passwordnya
	//echo "ADA GAN";
	$_SESSION['login'] = 1;
	header('location:admin.php');

}

else{
	echo"DITOLAK MENTAH-MENTAH";
	//Jika tidak ada, maka username ditolak

}
?>