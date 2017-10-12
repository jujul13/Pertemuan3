<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa Kalbis</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" 
	integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" 
	crossorigin="anonymous">
	<style>
		#tbody{background:#000000;}
		#menu{background:#CCCCFF;}
		#konten{background:#CCCC33;}
		#filter{background:#33FFCC;}
		#search{background:#33FFCC;}
		#footer{background:cyan;}
	</style>
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
	<h2>Tambah Kontak</h2>
	<form action="proses_tambah_kontak.php" method="post">
	<tbody>
		Nama:
		<input type="text" name="nama" />
		<br />
		Phone:
		<input type="text" name="phone" />
		<br />
		Email:
		<input type="text" name="email" />
		<br />
		Kategori:
		<select name="kategori"/> 
		<?php
		include("koneksi.php");
		$db = mysqli_connect("localhost","root", "", "kalbis_web");
		$query = "select * from kategori";
		$hasil = mysqli_query($db,$query);
		while($data=mysqli_fetch_array($hasil)){
		echo "<option value=$data[id]>$data[keterangan]</option>";
		
		}
		?>
		<br />
		</select>	
		<input type="submit" name="submit" value="Simpan" />
		
	</form>
	</tbody>
</div>
</body>
</html>