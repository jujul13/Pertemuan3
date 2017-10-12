<?php // filename: kategori.php
	//koneksi
	include("koneksi.php");
	
	//query
	$query = "SELECT * FROM kategori";
	$hasil = mysqli_query($db, $query);
?>

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
	<h2>Kategori</h2>
	<a href="form_tambah_kategori.php">Tambah Kategori</a>
	<table border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>Keterangan</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i = 0;
			while($row = mysqli_fetch_assoc($hasil)){
				$i++;
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row['keterangan']; ?></td>
				<td>
					<a href="kontak.php?id=<?php echo $row['id']; ?>">View Kontak</a> |					
					<a href="form_edit_kategori.php?id=<?php echo $row['id']; ?>">Edit</a> | 
					<a href="delete_kategori.php?id=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</div>
</body>
</html>