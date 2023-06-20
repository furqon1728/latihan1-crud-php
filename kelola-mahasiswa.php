<?php 
  include 'koneksi.php';

  $npm = '';
  $nama = '';
  $jurusan = '';
  $alamat = '';

  if (isset($_GET['ubah'])) {
    $npm = $_GET['ubah'];

    $query = "SELECT * FROM mahasiswa WHERE npm = '$npm';";
    $sql = mysqli_query($koneksi, $query);

    $result = mysqli_fetch_assoc($sql);

    $nama = $result['nama'];
    $jurusan = $result['jurusan'];
    $alamat = $result['alamat'];

  }
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
    </div>
  </nav>
  <!-- AKHIR NAVBAR -->

  <!-- CONTAINER BODY CONTENT -->
  <div class="container mt-5 pt-4">
    <!-- Figure JUDUL TABEL -->
    <figure class="text-light">
      <blockquote class="blockquote">
        <h1>Tabel Mahasiswa</h1>
      </blockquote>
    </figure>
    <!-- AKHIR FIGURE JUDUL TABEL -->

    <!-- CONTAINER FORM -->
    <div class="container text-light mt-5">
        <form method="POST" action="proses-mahasiswa.php" >

          <div class="mb-3 row">
            <label for="inputNpm" class="col-sm-2 col-form-label">NPM</label>
              <div class="col-sm-10">
                <input required type="text" class="form-control" id="inputNpm" name="inputNpm" placeholder="Masukkan NPM" value="<?php echo $npm ?>">
              </div>
          </div>
    
          <div class="mb-3 row">
            <label for="inputNamaMhs" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input required type="text" class="form-control" id="inputNamaMhs" name="inputNamaMhs" placeholder="Masukkan Nama" value="<?php echo $nama ?>">
              </div>
          </div>
          
          <div class="mb-3 row">
            <label for="inputJurusan" class="col-sm-2 col-form-label">Jurusan</label>
              <div class="col-sm-10">
                <select required class="form-select" id="inputJurusan" name="inputJurusan">
                  <option>Jurusan</option>
                  <option <?php if ($jurusan == 'Sistem Operasi'){echo "selected";}?>  value="Sistem Operasi"> Sistem Operasi </option>
                  <option <?php if ($jurusan == 'Teknik Informatika'){echo "selected";}?>  value="Teknik Informatika">Teknik Informatika</option>
                </select>
              </div>
          </div>
          
          <div class="mb-3 row">
            <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <textarea required class="form-control" id="inputAlamat" name="inputAlamat" rows="3"><?php echo $alamat ?></textarea>
              </div>
          </div>
          
          <div class="mb-3 row mt-5">
            <!-- BUTTON TAMBAH DATA MAHASISWA -->
            <div class="col">
              <?php
                if (isset($_GET['ubah'])) {
              ?>
              <button type="submit" name="aksi" value="edit" class="btn btn-success active">
                <i class="bi bi-save2"></i>
                Simpan Perubahan
              </button>
              <?php
              } else {
                ?>
                <button type="submit" name="aksi" value="add" class="btn btn-primary active">
                  <i class="bi bi-plus-square"></i>
                  Tambah Data
                </button>
              <?php
              }
              ?>
              
              <a type="button" href="kumpulan-tabel.php" class="btn btn-danger active">
                <i class="bi bi-backspace"></i>
                Batal
              </a>
              <!-- AKHIR BUTTON TAMBAH DATA MAHASISWA -->
            </div>

          </div>
        </form>
      

      
    </div>
    <!-- AKHIR CONTAINER FORM -->
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