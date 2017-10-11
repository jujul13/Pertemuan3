<?php //filename: delete_kontak.php
//1. koneksi
include ("koneksi.php");


// 2. Query
$query = "DELETE FROM kontak WHERE id=$_GET[id]";
mysqli_query($db, $query);

header('Location: kontak.php');