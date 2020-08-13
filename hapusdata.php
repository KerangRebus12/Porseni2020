<?php
	include 'koneksidbporseni.php';
	$id = $_GET['id'];
	mysqli_query($koneksi,"DELETE FROM cabor WHERE id ='$id'");
	header("location:tampildatapendaftar.php")
?>