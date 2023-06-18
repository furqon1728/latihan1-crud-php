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
      <a class="navbar-brand" href="#">
        <strong>TUGAS CRUD</strong>
      </a>
    </div>
  </nav>
  <!-- AKHIR NAVBAR -->

  <!-- CONTAINER BODY CONTENT -->
  <div class="container mt-5 pt-4">
    <!-- Figure JUDUL TABEL -->
    <figure class="text-light">
      <blockquote class="blockquote">
        <h1>Tabel Mata Kuliah</h1>
      </blockquote>
    </figure>
    <!-- AKHIR FIGURE JUDUL TABEL -->

    <!-- FORM -->
    <div class="container text-light mt-5">

      <div class="mb-3 row">
        <label for="inputKdMk" class="col-sm-2 col-form-label">Kode MK</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputKdMk" placeholder="Ex: MK01">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="inputNamaMk" class="col-sm-2 col-form-label">Nama MK</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputNamaMk" placeholder="Masukkan Nama">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="inputSks" class="col-sm-2 col-form-label">Jumlah SKS</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputSks" placeholder="Masukkan 1 digit angka, Ex : 3">
        </div>
      </div>

      <div class="mb-3 row mt-5">
        <!-- BUTTON TAMBAH DATA MAHASISWA -->
        <div class="col">
          <button type="button" href="#" class="btn btn-primary active" role="button" data-bs-toggle="button"
            aria-pressed="true">
            <i class="bi bi-plus-square"></i>
            Tambah Data
          </button>

          <a type="button" href="kumpulan-tabel.php" class="btn btn-danger active" role="button" aria-pressed="true">
            <i class="bi bi-backspace"></i>
            Batal
          </a>

        </div>
        <!-- AKHIR BUTTON TAMBAH DATA MAHASISWA -->
      </div>

    </div>
    <!-- AKHIR FORM -->
  </div>
  <!-- AKHIR CONTAINER BODY CONTENT -->



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