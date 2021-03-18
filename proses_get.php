<!doctype html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<h2>Data Mahasiswa</h2>
	<?php
	$nim = $_GET['nim_mhs'];
	$nama = $_GET['nama_mhs'];
	$jurusan = $_GET['jur_mhs'];

	echo "NIM : $nim";
	echo "<br />";
	echo "Nama: $nama";
	echo "<br />";
	echo "Jurusan : $jurusan";
	?>
	</body>
	</html>