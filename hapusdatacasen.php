<?php
	include 'koneksidbporseni.php';
	$id = $_GET['id'];
	mysqli_query($koneksi,"DELETE FROM casen WHERE id ='$id'");
	header("location:tampildatapendaftarcasen.php")
?>