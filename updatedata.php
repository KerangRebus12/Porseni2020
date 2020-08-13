<?php 
	include 'koneksidbporseni.php';

	$id = $_GET['id'];
	$nama = $_POST['nama'];
  	$nim = $_POST['nim'];
  	$jk = $_POST['jenis_kelamin'];
  	$jurusan = $_POST['jurusan'];
 	$prodi = $_POST['prodi'];
  	$tingkat = $_POST['tingkat'];
  	$alamat = $_POST['alamat'];
  	$agama = $_POST['agama'];
  	$email = $_POST['email'];
  	$nohp = $_POST['nohp'];
  	$cabang = $_POST['cabang'];
  	$berat = $_POST['berat'];
  	$tinggi = $_POST['tinggi'];

	mysqli_query($koneksi,"UPDATE cabor SET nama='$nama',nim='$nim',jenis_kelamin='$jk',jurusan='$jurusan',prodi='$prodi',tingkat='$tingkat',alamat='$alamat',agama='$agama',email='$email',nohp='$nohp',cabang='$cabang',berat='$berat',tinggi='$tinggi' WHERE id = '$id'");
	header("location:tampildatapendaftar.php");
?>