<!doctype html>
<html>
<head>
	<title>Form Mahasiswa</title>
</head>
<body>

<h2>Form Mahasiswa</h2>
<form action="proses_post.php" method="post">
	NIM :
	<input type="text" name="nim_mhs" />
	<br/>
	Nama :
	<input type="text" name="nama_mhs" />
	<br />
	Jurusan :
	<select name="jur_mhs">
		<option value="IF">Informatika</option>
		<option value="SI">Sistem Informasi</option>
		<option value="IK">Ilmu Komunikasi</option>
		<option value="MN">Manajemen</option>
		<option value="AK">Akuntansi</option>
		<option value="ARK">Arsitektur</option>
		<option value="DKV">Desain Komunikasi Visual</option>
		</select>
		<br />
		<input type="submit" value="kirim" />
		</form>
		</body>
		</html>