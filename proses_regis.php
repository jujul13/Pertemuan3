<?php //Filename: proses_regis.php
$username = $_POST['username'];
$password = $_POST['password'];


// enkripsi Password
$enc_pass = password_hash($password, PASSWORD_BCRYPT);


// 1.Koneksi
$koneksi = mysqli_connect("localhost", "root", "","kalbis_web");

// 2.Query
$query = "INSERT INTO users (username,password) VALUES('$username', '$enc_pass')";

mysqli_query($koneksi, $query);