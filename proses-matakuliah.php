<?php 
  include 'koneksi.php';
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
          <div class="container mt-5 pt-5">

          <!-- PHP PEMROSESAN -->
            <?php
              if (isset($_POST['aksi'])) {
                  if ($_POST['aksi'] == "add") {
                    $inputKdMk = $_POST['inputKdMk'];
                    $inputNamaMk = $_POST['inputNamaMk'];
                    $inputSks = $_POST['inputSks'];

                    $query = "INSERT INTO matakuliah VALUES('$inputKdMk', '$inputNamaMk', '$inputSks')";
                    $sql = mysqli_query($koneksi, $query);

                    if ($sql) {
                      header("location: kumpulan-tabel.php");
                    } else {
                      echo $query;
                    }
                    
                  }elseif ($_POST['aksi'] == "edit") {
                    $inputKdMk = $_POST['inputKdMk'];
                    $inputNamaMk = $_POST['inputNamaMk'];
                    $inputSks = $_POST['inputSks'];

                    $query = "UPDATE matakuliah SET kodemk='$inputKdMk', nama='$inputNamaMk', jumlah_sks='$inputSks' WHERE kodemk='$inputKdMk';";
                    $sql = mysqli_query($koneksi, $query);

                    if ($sql) {
                      header("location: kumpulan-tabel.php");
                    } else {
                      echo $query;
                    }
                  }
              }

              if (isset($_GET['hapus'])) {
                $kodemk = $_GET['hapus'];
                $query = "DELETE FROM matakuliah WHERE kodemk = '$kodemk'";
                $sql = mysqli_query($koneksi, $query);

                if ($sql) {
                  header("location: kumpulan-tabel.php");
                } else {
                  echo $query;
                }

              }
            ?>
            <!-- AKHIR PHP PEMROSESAN -->

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