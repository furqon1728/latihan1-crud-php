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
      <a class="navbar-brand" href="#">
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
        <tr>
          <td>001</td>
          <td>Siska Putri</td>
          <td>Sistem Informasi</td>
          <td>Jakarta Selatan</td>

          <td>
            <a type="button" class="btn btn-success" href="kelola-mahasiswa.php"> <i class="bi bi-pencil"></i> </a>
            <a type="button" class="btn btn-danger"> <i class="bi bi-trash"></i> </a>
          </td>
        </tr>

        <tr>
          <td>002</td>
          <td>Ujang Aziz</td>
          <td>Sistem Informasi</td>
          <td>Jakarta Barat</td>
          <td>
            <a type="button" class="btn btn-success"> <i class="bi bi-pencil"></i> </a>
            <a type="button" class="btn btn-danger"> <i class="bi bi-trash"></i> </a>
          </td>
        </tr>

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
        <tr>
          <td>MK01</td>
          <td>Basis Data</td>
          <td>3</td>

          <td>
            <a type="button" class="btn btn-success" href="kelola-matakuliah.php"> <i class="bi bi-pencil"></i> </a>
            <a type="button" class="btn btn-danger"> <i class="bi bi-trash"></i> </a>
          </td>
        </tr>

        <tr>
          <td>MK02</td>
          <td>Pemrograman Berbasis Web</td>
          <td>3</td>

          <td>
            <a type="button" class="btn btn-success"> <i class="bi bi-pencil"></i> </a>
            <a type="button" class="btn btn-danger"> <i class="bi bi-trash"></i> </a>
          </td>
        </tr>

       

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
        <tr>
          <td>1</td>
          <td>001</td>
          <td>MK01</td>

          <td>
            <a type="button" class="btn btn-success" href="kelola-krs.php"> <i class="bi bi-pencil"></i> </a>
            <a type="button" class="btn btn-danger"> <i class="bi bi-trash"></i> </a>
          </td>
        </tr>

        <tr>
          <td>2</td>
          <td>002</td>
          <td>MK02</td>
          <td>
            <a type="button" class="btn btn-success"> <i class="bi bi-pencil"></i> </a>
            <a type="button" class="btn btn-danger"> <i class="bi bi-trash"></i> </a>
          </td>
        </tr>

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