<?php 
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE npm = '".$_GET['npm']."'");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCKTYPE html>
<html>
<head>
	<title>Halaman Edit Data</title>
</head>
<body>
<h2>Edit Data Mahasiswa</h2>
<a href="index.php" style="padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;">Data Mahasiswa</a><br><br>
<form action="" method="POST">
<table>
	<tr>
		<td>NPM</td>
		<td>:</td>
		<td><input type="text" name="npm" value="<?php echo $result['npm'] ?>"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama_lengkap" value="<?php echo $result['nama_lengkap'] ?>"></td>
	</tr>
	<tr>
		<td>Prodi</td>
		<td>:</td>
		<td><input type="text" name="prodi" value="<?php echo $result['prodi'] ?>"></td>
	</tr>
	<tr>
		<td>Kelompok Kelas</td>
		<td>:</td>
		<td>
		<select name="kelompok_kelas">
			<option value="<?php echo $result['kelompok_kelas']?>"><?php echo $result['kelompok_kelas'] ?>"</option>
			<option value="Reguler Pagi">Reguler Pagi</option>
			<option value="Reguler Sore">Reguler Sore</option>
		</select>
		</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="edit" value="Simpan"></td>
	</tr>
</table>	
</form>
<?php
if(isset($_POST['edit'])){
	$update = mysqli_query($conn, "UPDATE mahasiswa SET nama_lengkap = '".$_POST['nama_lengkap']."',
		prodi = '".$_POST['prodi']."', kelompok_kelas = '".$_POST['kelompok_kelas']."' 
		WHERE npm = '".$_GET['npm']."'");
	if($update){
		echo 'berhasil edit';
	}else{
		echo 'gagal edit';
	}
}
?>
</body>
</html>