<?php 
include 'koneksi.php';
if(isset($_GET['npm'])){
	$delete = mysqli_query($conn, "DELETE FROM mahasiswa WHERE npm = '".$_GET['npm']."' ");
	header('location:index.php');
}
?>