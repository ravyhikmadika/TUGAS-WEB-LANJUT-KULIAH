<!DOCKTYPE html>
<html>
<head>
	<title>Halaman Input Data</title>
</head>
<body>
<h2>Input Data Mahasiswa</h2>
<a href="index.php" style="padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;">Data Mahasiswa</a><br><br>
<form action="" method="POST">
<table>
	<tr>
		<td>NPM</td>
		<td>:</td>
		<td><input type="text" name="npm" placeholder="NPM" required></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama_lengkap" placeholder="Nama" required></td>
	</tr>
	<tr>
		<td>Prodi</td>
		<td>:</td>
		<td><input type="text" name="prodi" placeholder="Prodi" required></td>
	</tr>
	<tr>
		<td>Kelompok Kelas</td>
		<td>:</td>
		<td>
		<select name="kelompok_kelas">
			<option value="Reguler Pagi">Reguler Pagi</option>
			<option value="Reguler Sore">Reguler Sore</option>
		</select>
		</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="simpan" value="Simpan"></td>
	</tr>
</table>	
</form>
<?php
include 'koneksi.php';
if(isset($_POST['simpan'])){
$insert = mysqli_query($conn, "INSERT INTO mahasiswa VALUES 
				('".$_POST['npm']."', 
				'".$_POST['nama_lengkap']."',
				'".$_POST['prodi']."',
				'".$_POST['kelompok_kelas']."')");
			if($insert){
				echo 'berhasil disimpan';
			}else{
				echo 'gagal disimpan'.mysqli_query($conn);
			}
}
?>
</body>
</html>