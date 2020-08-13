<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Edit Data Peserta Porseni 2020</title>
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
    <h1 style="margin-top: 20px" align="center">Edit Data Peserta Porseni 2020</h1>
    <div class="row" style="margin-top:40px">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <?php 
  include 'koneksidbporseni.php';
  $id = $_GET['id'];
  $data = mysqli_query($koneksi,"SELECT * FROM casen WHERE id = '$id'");
  while($d = mysqli_fetch_array($data)){
  ?>
      <form method="POST" action="updatedatacasen.php?id=<?php echo $id ?>">
        <div class="jumbotron">
        <div class="form-group row">
          <label for="nama">Nama Mahasiswa :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" value="<?php echo $d['nama'];?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="nim">NIM :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nim" value="<?php echo $d['nim'];?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="jk">Jenis Kelamin :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin'];?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="jurusan">Jurusan :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="jurusan" value="<?php echo $d['jurusan'];?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="prodi">Program Studi :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="prodi" value="<?php echo $d['prodi'];?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="tingkat">Tingkat :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tingkat" value="<?php echo $d['tingkat'];?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="alamat">Alamat :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat'];?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="agama">Agama :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="agama" value="<?php echo $d['agama'];?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="email">Email :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="email" value="<?php echo $d['email'];?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="nohp">Kontak :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nohp" value="<?php echo $d['nohp'];?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="cabang">Cabang :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="cabang" value="<?php echo $d['cabang'];?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="berat">Berat Badan :</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="berat" value="<?php echo $d['berat'];?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="tinggi">Tinggi Badan :</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="tinggi" value="<?php echo $d['tinggi'];?>">
          </div>
        </div>
        <button type="submit" class="btn btn-primary" role="button" aria-pressed="true">UPDATE</button>
        </div>
      </form>
      <?php
    }
      ?>
    </div>
    <div class="col-md-2"></div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>