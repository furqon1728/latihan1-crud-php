<?php 
  include 'koneksi.php';
  $query_mahasiswa = "SELECT * FROM mahasiswa"; 
  $sql_mahasiswa = mysqli_query($koneksi, $query_mahasiswa);
  $query_matakuliah = "SELECT * FROM matakuliah"; 
  $sql_matakuliah = mysqli_query($koneksi, $query_matakuliah);
  $query_krs = "SELECT * FROM krs"; 
  $sql_krs = mysqli_query($koneksi, $query_krs);
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
  <link rel="stylesheet" href="font/bootstrap-icons.css">
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
          <a class="nav-link" href="index.php">KRS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Tabel Basis Data</a>
        </li>
      </ul>
      <!-- AKHIR TAB PILIHAN -->
    </div>
  </nav>
  <!-- AKHIR NAVBAR -->


  <!-- DATABASE TABLE MAHASISWA -->
  <div class="container mb-5 mt-5 pt-4">

    <!-- Figure JUDUL TABEL -->
    <figure class="text-light">
      <blockquote class="blockquote">
        <h1>Tabel Mahasiswa</h1>
      </blockquote>
      <figcaption class="blockquote-footer text-light">
        Berisi Basis Data <cite title="data krs">Tabel Mahasiswa</cite>
      </figcaption>
    </figure>
    <!-- AKHIR FIGURE JUDUL TABEL -->

    <!-- BUTTON TAMBAH DATA MAHASISWA -->
    <a href="kelola-mahasiswa.php" class="btn btn-primary active" role="button" aria-pressed="true">
      <i class="bi bi-plus-square"></i>
      Tambah Data
    </a>


    <!-- TABLE MAHASISWA -->
    <table class="table table-hover mt-5 table-dark">
      <thead class="table-dark">
        <tr>
          <th scope="col">NPM</th>
          <th scope="col">Nama</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Alamat</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php
          while ($result = mysqli_fetch_assoc($sql_mahasiswa)) {
        ?>
        <tr>
          <td>
            <?php echo $result['npm'];?>
          </td>
          <td>
            <?php echo $result['nama'];?>
          </td>
          <td>
            <?php echo $result['jurusan'];?>
          </td>
          <td>
            <?php echo $result['alamat'];?>
          </td>

          <td>
            <a type="button" class="btn btn-success" href="kelola-mahasiswa.php?ubah=<?php echo $result['npm'];?>"> <i class="bi bi-pencil"></i> </a>
            <a type="button" class="btn btn-danger" href="proses.php?hapus=<?php echo $result['npm'];?>"> <i class="bi bi-trash"></i> </a>
          </td>
        </tr>
        <?php
         }
        ?>

      </tbody>
    </table>
  </div>
  <!-- AKHIR TABLE MAHASISWA -->

  <!-- AKHIR DATABASE TABLE MAHASISWA -->


  <!-- DATABASE TABLE MATAKULIAH -->
  <div class="container mb-5">

    <!-- Figure JUDUL TABEL -->
    <figure class="text-light">
      <blockquote class="blockquote">
        <h1>Tabel Mata Kuliah</h1>
      </blockquote>
      <figcaption class="blockquote-footer text-light">
        Berisi Basis Data <cite title="data krs">Tabel matakuliah</cite>
      </figcaption>
    </figure>
    <!-- AKHIR FIGURE JUDUL TABEL -->

    <!-- BUTTON TAMBAH DATA KRS -->
    <a href="kelola-matakuliah.php" class="btn btn-primary active" role="button" aria-pressed="true">
      <i class="bi bi-plus-square"></i>
      Tambah Data
    </a>


    <!-- TABLE MATAKULIAH -->
    <table class="table table-hover mt-5 table-dark">
      <thead class="table-dark">
        <tr>
          <th scope="col">Kode MK</th>
          <th scope="col">Nama</th>
          <th scope="col">Jumlah SKS</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
      <?php
          while ($result = mysqli_fetch_assoc($sql_matakuliah)) {
        ?>
        <tr>
          <td>
            <?php echo $result['kodemk'];?>
          </td>
          <td>
          <?php echo $result['nama'];?>
          </td>
          <td>
          <?php echo $result['jumlah_sks']." sks";?>
          </td>

          <td>
            <a type="button" class="btn btn-success" href="kelola-matakuliah.php?ubah=<?php echo $result['kodemk'];?>"> <i class="bi bi-pencil"></i> </a>
            <a type="button" class="btn btn-danger" href="proses.php?hapus=<?php echo $result['kodemk'];?>"> <i class="bi bi-trash"></i> </a>
          </td>
        </tr>
       <?php
          }
        ?>

      </tbody>
    </table>
  </div>
  <!-- AKHIR TABLE MATAKULIAH -->
  <!-- AKHIR DATABASE TABLE MATAKULIAH -->

  <!-- DATABASE TABLE KRS -->
  <div class="container mb-5">

    <!-- Figure JUDUL TABEL -->
    <figure class="text-light">
      <blockquote class="blockquote">
        <h1>Tabel KRS</h1>
      </blockquote>
      <figcaption class="blockquote-footer text-light">
        Berisi Basis Data <cite title="data krs">Tabel krs</cite>
      </figcaption>
    </figure>
    <!-- AKHIR FIGURE JUDUL TABEL -->

    <!-- BUTTON TAMBAH DATA KRS -->
    <a href="kelola-krs.php" class="btn btn-primary active" role="button" aria-pressed="true">
      <i class="bi bi-plus-square"></i>
      Tambah Data
    </a>


    <!-- TABLE KRS -->
    <table class="table table-hover mt-5 table-dark">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NPM Mahasiswa</th>
          <th scope="col">Kode MK</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
      <?php
          while ($result = mysqli_fetch_assoc($sql_krs)) {
        ?>
        <tr>
          <td>
            <?php echo $result['id'];?>
          </td>
          <td>
            <?php echo $result['mahasiswa_npm'];?>
          </td>
          <td>
            <?php echo $result['matakuliah_kodemk'];?>
          </td>

          <td>
            <a type="button" class="btn btn-success" href="kelola-krs.php?ubah=<?php echo $result['id'];?>"> <i class="bi bi-pencil"></i> </a>
            <a type="button" class="btn btn-danger" href="proses.php?hapus=<?php echo $result['id'];?>"> <i class="bi bi-trash"></i> </a>
          </td>
        </tr>
        <?php
          }
        ?>

      </tbody>
    </table>
  </div>
  <!-- AKHIR TABLE KRS -->
  <!-- AKHIR DATABASE TABLE KRS -->



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