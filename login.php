<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
    
    <title>SIK Login/Signup</title>
</head>

<body>
    <!-- nav section start -
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(222, 240, 255);" text-light sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="/index.html">Sistem Informasi Kesehatan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/about/index.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Content
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/daftar_rs/index.html">Daftar Rumah Sakit</a></li>
                  <li><a class="dropdown-item" href="/daftar_artikel/index.html">Daftar Artikel</a></li>
                  <-- <li><hr class="dropdown-divider"></li>  blm digunakan --
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
    nav section end -->
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
        
    <!-- first layout end-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
// file login.php
include "koneksi.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];
        header("Location: index.php");
    } else {
        echo "Username atau password salah";
    }
}
?>
<!--Login form-->
<div class="container">
  <h4 class="text-center">Form Login</h4>

  <form action="#" method="post">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" name="" class="form-control" placeholder="Masukan Username Anda">
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="" class="form-control" placeholder="Masukan Password Anda">
    </div>

    <button type="submit" name="login" value="Login" class="btn btn-primary">Submit</button>

  </form>
</div>

</body>
</html>