
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Sistem Informasi Kesehatan</title>
</head>

<body>
    <!-- nav section start --> 
    
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(222, 240, 255);" text-light sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="/?menu=index">Sistem Informasi Kesehatan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="?menu=about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?menu=login">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?menu=rumah_sakit">Daftar Rumah Sakit</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?menu=artikel">Daftar Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?menu=contact">Contact</a>
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
            } elseif ($_GET['menu'] == "about"){
                include_once 'about.php';
            } elseif ($_GET['menu'] == "rumah_sakit"){
                include_once 'daftar_rs.php';
            } elseif ($_GET['menu'] == "artikel"){
                include_once 'daftar_artikel.php';
            } elseif ($_GET['menu'] == "contact"){
                include_once 'contact.php';
            }
        }
    ?>

    <!-- first layout start-->
    <div class="container-fluid bg-light text-dark" style="height: 150vh">

        <!--carousel images-->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <?php
              $carouselItems = [
                "/asset/6iStock-1256189055.jpg" => [
                  "caption" => "Daftar Rumah Sakit",
                  "description" => "Informasi daftar rumah sakit diseluruh Indonesia."
                ],
                "/asset/2iStock-1220059468.jpg" => [
                  "caption" => "Informasi Layanan Kesehatan",
                  "description" => "Periksa lokasi dan informasi kontak pusat kesehatan masyarakat, termasuk layanan darurat dan nomor-nomor yang penting."
                ],
                "/asset/3iStock-1385760359.jpg" => [
                  "caption" => "Artikel dan Informasi Kesehatan",
                  "description" => "Panduan kesehatan, vaksinasi, dan tips hidup sehat."
                ],
              ];

              foreach ($carouselItems as $index => $item) {
                $activeClass = $index === "/asset/6iStock-1256189055.jpg" ? 'active' : '';
                echo '<div class="carousel-item ' . $activeClass . '">';
                echo '<img src="' . $index . '" class="d-block w-100" alt="' . $item["caption"] . '">';
                echo '<div class="carousel-caption d-md-block text-dark">';
                echo '<h5>' . $item["caption"] . '</h5>';
                echo '<p>' . $item["description"] . '</p>';
                echo '</div>';
                echo '</div>';
              }
            ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!--end of carousel images-->

        <div class="row text-center align-items-center">
          <div class="col-12">
           <h1>Selamat datang di sistem informasi kesehatan</h1>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
    <!-- first layout end-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>