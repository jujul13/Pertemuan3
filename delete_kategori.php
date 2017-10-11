<?php //filename: delete_kategori.php
//1. koneksi
include ("koneksi.php");


// 2. Query
$query = "DELETE FROM kategori WHERE id=$_GET[id]";
mysqli_query($db, $query);

header('Location: kategori.php');