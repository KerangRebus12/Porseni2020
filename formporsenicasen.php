<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Form Peserta Porseni</title>
  </head>
  <body>
                  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php">PORSENI 2020</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="tampildatapendaftar.php">Pendaftar Cabor</a>
      <a class="nav-item nav-link" href="tampildatapendaftarcasen.php">Pendaftar Casen</a>
    </div>
</nav>
  <!-- End Navbar -->
    <div class="row" style="margin-top:40px">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <form action="" method="POST">
     <h3 align="center">Form Peserta PORSENI 2020 Cabang Seni</h3><br> 
  <div class="form-group">
    <label for="nama">Nama Mahasiswa :</label>
    <input name="nama" type="text" class="form-control" id="namamhs" placeholder="Nama Lengkap">
  </div>
  <div class="form-group">
    <label for="nim">NIM :</label>
    <input name="nim" type="text" class="form-control" id="nimmhs" placeholder="NIM">
  </div>
  <div class="form-group">
    <label for="jk">Jenis Kelamin :</label><br>
    <input name="jenis_kelamin" type="radio" value="Laki-laki">
    Laki-laki
    &nbsp;<input name="jenis_kelamin" type="radio" value="Perempuan">
    Perempuan
  </div>
  <div class="form-group">
    <label for="jurusan">Jurusan :</label>
    <input name="jurusan" type="text" class="form-control" id="namamhs" placeholder="Jurusan">
  </div>
  <div class="form-group">
    <label for="prodi">Program Studi :</label>
    <input name="prodi" type="text" class="form-control" id="namamhs" placeholder="Program Studi">
  </div>
  <div>
    <label for="tingkat">Tingkat :</label>
    &nbsp;<select name="tingkat" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
    </select>
  </div>
  <div class="form-group">
    <label for="alamat">Alamat :</label>
    <textarea name="alamat" type="text" class="form-control" id="alamat" placeholder="Alamat"></textarea>
  </div>
  <div>
    <label for="agama">Agama :</label>
    &nbsp;<select name="agama" class="form-control">
      <option value="Islam">Islam</option>
      <option value="Kristen Protestan">Kristen Protestan</option>
      <option value="Kristen Katolik">Kristen Katolik</option>
      <option value="Budha">Budha</option>
      <option value="Hindu">Hindu</option>
    </select>
  </div>
  <div class="form-group">
    <label for="email">Alamat Email :</label>
    <input name="email" type="text" class="form-control" id="email" placeholder="Email Anda">
  </div>
  <div class="form-group">
    <label for="nohp">Nomer Handphone :</label>
    <input name="nohp" type="text" class="form-control" id="nomorhp" placeholder="Nomer Handphone">
  </div>
  <div>
    <label for="cabang">Cabang Seni :</label>
    &nbsp;<select name="cabang" class="form-control">
      <option value="Solo Vocal">Solo Vocal</option>
      <option value="Puisi">Puisi</option>
      <option value="Monolog">Monolog</option>
      <option value="Photography">Photography</option>
      <option value="Karikatur">Karikatur</option>
      <option value="Nasyid">Nasyid</option>
      <option value="Kaligrafi">Kaligrafi</option>
      <option value="Stand Up Comedy">Stand Up Comedy</option>
    </select>
  </div>
  <div class="form-group">
    <label for="berat">Berat Badan :</label>
    <input name="berat" type="number" class="form-control" id="bb" placeholder="Berat Badan">
  </div>
  <div class="form-group">
    <label for="tinggibadan">Tinggi Badan :</label>
    <input name="tinggi" type="number" class="form-control" id="tinggi" placeholder="Tinggi Badan">
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
  <a href="tampildatapendaftarcasen.php" class="btn btn-primary" role="button" aria-pressed="true">Tampil</a>
  <a href="index.php" class="btn btn-primary" role="button" aria-pressed="true">Home</a>
</form>
</div>
<div class="col-md-3"></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
  include 'koneksidbporseni.php'; 
if($_SERVER["REQUEST_METHOD"] == "POST"){
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

  mysqli_query($koneksi,"INSERT INTO casen(nama,nim,jenis_kelamin,jurusan,prodi,tingkat,alamat,agama,email,nohp,cabang,berat,tinggi) values('$nama','$nim','$jk','$jurusan','$prodi','$tingkat','$alamat','$agama','$email','$nohp','$cabang','$berat','$tinggi')"); 
}
  ?>