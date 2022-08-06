<!DOCKTYPE html>
	<html>
	<head>
		<title>Halaman Data Mahasiswa</title>
	</head>
	<body>
	<h2>Data Mahasiswa</h2>
	<a href="form-input.php" style="padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;">Tambah Data</a><br><br>
	<table border="1" cellspacing="0" width="50%">
		<tr style="text-align:center; background-color:skyblue;">
			<td><b>No</b></td>
			<td><b>NPM</b></td>
			<td><b>Nama</b></td>
			<td><b>Prodi</b></td>
			<td><b>Kelompok Kelas</b></td>
			<td><b>Opsi</b></td>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$select = mysqli_query($conn, "SELECT * FROM mahasiswa");
		if(mysqli_num_rows($select) > 0){
		while($hasil = mysqli_fetch_array($select)){
		?>
		<tr style="text-align:center;">
			<td><?php echo $no++ ?></td>
			<td><?php echo $hasil['npm'] ?></td>
			<td><?php echo $hasil['nama_lengkap'] ?></td>
			<td><?php echo $hasil['prodi'] ?></td>
			<td><?php echo $hasil['kelompok_kelas'] ?></td>
			<td>
				<a href="form-edit.php?npm=<?php echo $hasil['npm'] ?>">Edit</a> ||
				<a href="delete.php?npm=<?php echo $hasil['npm'] ?>">Hapus</a>
			</td>
		</tr>
		<?php }}else{ ?>
			<tr>
				<td colspan="6" align="center">Data Kosong</td>
			</tr>
		<?php } ?>
	</table>
	</body>
	</html>