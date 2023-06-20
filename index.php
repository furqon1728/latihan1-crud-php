<?php 
  include 'koneksi.php';

  $query = "SELECT mahasiswa.nama AS 'nama_mhs' , matakuliah.nama AS 'nama_matkul', matakuliah.jumlah_sks FROM mahasiswa JOIN krs ON mahasiswa.npm = krs.mahasiswa_npm JOIN matakuliah ON matakuliah.kodemk = krs.matakuliah_kodemk;";
  $sql = mysqli_query($koneksi, $query);
  $no = 0;
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- FAVICON -->
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">


  <title>Latihan CRUD</title>
  <!-- CDN LINK CSS BOOTSTRAP  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- LINK CSS BOOTSTRAP -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- BOOTSTRAP ICON -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar bg-body-tertiary mb-5 shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#" style="font-size : 1.1em;">
        <img src="img/android-chrome-512x512.png" alt="logo" style="width: 2.3em; margin-right: 0.5em;">
        <strong>TUGAS CRUD</strong>
      </a>

      <!-- TAB PILIHAN -->
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">KRS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kumpulan-tabel.php">Tabel Basis Data</a>
        </li>
        </ul>
        <!-- AKHIR TAB PILIHAN -->
      </div>
    </nav>
    <!-- AKHIR NAVBAR -->


  <div class="container mt-5 pt-4">

    <!-- Figure JUDUL TABEL -->
    <figure class="text-light">
      <blockquote class="blockquote">
          <h1>Tabel KRS</h1>
          <p>Berisi Data Mahasiswa yang Mengambil KRS</p>
      </blockquote>
    </figure>
      <!-- AKHIR FIGURE JUDUL TABEL -->

      <!-- BUTTON TAMBAH DATA KRS
      <a href="#" class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true">
      <i class="bi bi-plus-square"></i>
      Tambah Data
      </a> -->

      <!-- TABLE KRS -->
      <table class="table table-hover mt-5 table-dark">
        <thead class="table-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Mata Kuliah</th>
          <th scope="col">Keterangan</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
      <?php
          while ($result = mysqli_fetch_assoc($sql)) {
        ?>
        <tr>
          <th scope="row">
            <?php echo ++$no; ?>
          </th>
          <td>
          <?php echo $result['nama_mhs'];?>
          </td>
          <td>
          <?php echo $result['nama_matkul'];?>
          </td>
          <td>
          <?php echo "<font color='#0D6EFD'>".$result['nama_mhs']."</font>" . " Mengambil Mata Kuliah"."<font color='#0D6EFD'> ".$result['nama_matkul']."</font>" ." (".$result['jumlah_sks']."SKS)";?>
          </td>
        </tr>
        <?php
          }
        ?>
      </tbody>
    </table>
    <!-- AKHIR TABLE KRS -->
  </div>


    
  <!-- CDN LINK JS BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <!-- LINK JS BOOTSTRAP -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- CDN LINK POPPER JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
    crossorigin="anonymous"></script>
</body>

</html>