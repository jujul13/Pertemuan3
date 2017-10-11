<?php // filename: form_edit_kategori.php
	//koneksi
	include("koneksi.php");
	
	$id = $_GET['id'];
	
	//query
	$query = "SELECT * FROM kategori
			  WHERE id=$id";
	$hasil = mysqli_query($db, $query);
	
	//tampil
	$row = mysqli_fetch_assoc($hasil);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Phone Book</title>
</head>
<body>
<h1>Phone Book</h1>
<div id="menu">
	<ul>
		<li><a href="index.php">Kontak</a></li>
		<li><a href="kategori.php">Kategori</a></li>
	</ul>
</div>
<div id="konten">
	<h2>Edit Kategori</h2>
	<form action="proses_edit_kategori.php" method="post">
		Keterangan:
		<input type="text" value="<?php echo $row['keterangan']; ?>" name="ket" />
		<br />
		<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
		<input type="submit" value="Simpan" />
	</form>
</div>
</body>
</html>