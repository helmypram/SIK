<?php
// file rumah_sakit.php
include "koneksi.php";
session_start();

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    $sql = "INSERT INTO rumah_sakit (nama, alamat, telepon) VALUES ('$nama', '$alamat', '$telepon')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Rumah sakit berhasil ditambahkan";
    } else {
        echo "Rumah sakit gagal ditambahkan";
    }
}

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    $sql = "UPDATE rumah_sakit SET nama = '$nama', alamat = '$alamat', telepon = '$telepon' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Rumah sakit berhasil diedit";
    } else {
        echo "Rumah sakit gagal diedit";
    }
}

if (isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM rumah_sakit WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Rumah sakit berhasil dihapus";
    } else {
        echo "Rumah sakit gagal dihapus";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>SIK Rumah Sakit</title>
</head>

<body>
    <!-- nav section start --> 
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(222, 240, 255);" text-light sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="/index.html">Sistem Informasi Kesehatan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login_signup/index.html">Login</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Content
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/daftar_rs/index.html">Daftar Rumah Sakit</a></li>
                  <li><a class="dropdown-item" href="/daftar_artikel/index.html">Daftar Artikel</a></li>
                  <!-- <li><hr class="dropdown-divider"></li>  blm digunakan --> 
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact/index.html">Contact</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <!-- nav section end -->
    <?php
			if (isset($_GET['menu'])){
				if ($_GET['menu'] == "index"){
					include_once 'index.php';
        } elseif ($_GET['menu'] == "login"){
					include_once 'login.php';
				}elseif ($_GET['menu'] == "about"){
					include_once 'about.php';
				}elseif ($_GET['menu'] == "rumah_sakit"){
					include_once 'daftar_rs.php';
        }elseif ($_GET['menu'] == "artikel"){
					include_once 'daftar_artikel.php';
				}
			}
		?>
    <!-- first layout start-->
    <div class="container-fluid bg-light text-dark"
        style="height: 150vh">
        <div class="row text-center align-items-center">
          <div class="col-4">
            <img src="https://www.totaljobs.com/advice/wp-content/uploads/medical-writer-job-description-960x540.jpg" alt="my image" style="width: 100%;" />
          </div>
          <div class="col-8">
            Daftar Rumah Sakit
          </div>
        </div>
    <!-- first layout end-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>