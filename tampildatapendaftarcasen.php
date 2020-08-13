<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Data Pendaftar PORSENI 2020 Cabang Seni</title>
  </head>
  <body>
      <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">PORSENI 2020</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="tampildatapendaftar.php">Pendaftar Cabor</a>
      <a class="nav-item nav-link active" href="tampildatapendaftarcasen.php">Pendaftar Casen</a>
    </div>
</nav>
  <!-- End Navbar -->
    <h1 align="center">Data Pendaftar PORSENI 2020 Cabang Seni</h1>
    <div class="row" style="margin-top:40px">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">NIM</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Tingkat</th>
      <th scope="col">Kontak</th>
      <th scope="col">Cabang</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include 'koneksidbporseni.php';
    $no = 1;
    $data = mysqli_query($koneksi,"SELECT * FROM casen");
    while($d = mysqli_fetch_array($data)){
    ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $d['nama'];?></td>
      <td><?php echo $d['nim'];?></td>
      <td><?php echo $d['jenis_kelamin'];?></td>
      <td><?php echo $d['jurusan'];?></td>
      <td><?php echo $d['tingkat'];?></td>
      <td><?php echo $d['nohp'];?></td>
      <td><?php echo $d['cabang'];?></td>
      <td>
        <a href="editdatacasen.php?id=<?php echo $d['id']; ?>">EDIT</a>
        <a href="hapusdatacasen.php?id=<?php echo $d['id']; ?>">HAPUS</a>
      </td>
    </tr>
    <?php
  }
    ?>

  </tbody>
</table>
</div>
<div class="col-md-2"></div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>