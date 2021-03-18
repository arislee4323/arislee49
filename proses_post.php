<!doctpye html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<h2>Data Mahasiswa</h2>
	<?php
	$nim = $_POST['nim_mhs'];
	$nama = $_POST['nama_mhs'];
	$jurusan = $_POST['jur_mhs'];

	echo "NIM : $nim";
	echo "<br />";
	echo "Nama: $nama";
	echo "<br />";
	echo "Jurusan : $jurusan";
	?>
	</body>
	</html>
