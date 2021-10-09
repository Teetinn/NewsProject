<!DOCTYPE html>
<html>
<?php session_start(); ?>

<head>
  <title>Pem-Web News</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&family=Staatliches&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <script>
  FontAwesomeConfig = {
    autoA11y: true
  }
  </script>
  <script src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>
  <script src="assets/app.js"></script>

  <link rel="stylesheet" href="assets/main.css">

</head>

<body>
  <div class="row ctr-container-header">
    <div class="container-logo col-3">
      <i class="bi bi-slack"></i>
    </div>
    <div class="container-header col-6">
      <h1 class="header-berita">PEM-WEB NEWS</h1>
    </div>
    <?php
    include 'include/db_connection.php'; 
    if( isset($_SESSION["userName"]) && !empty($_SESSION['userName']) ){
      
          $id = $_SESSION['userName'];
                $result = $db->query("SELECT * FROM user WHERE userName = '$id'");
                $mhs = $result->fetch_assoc();
                $fp = $mhs['foto'];
                if($mhs['type'] == "user"){
                  echo "<script>alert('welcome user')alert</script>";
                } else{

                    echo "<script>document.location.href='?view=admin';</script>";
                }

                echo "<div class='col-3' style='display:flex;'>";
                echo "<a class='btn btn-danger logout-btn' aria-current='page' href='?view=logout'>Logout</a></nav>";
                echo "<p class='login-username'>" . $_SESSION['userName'] . "</p>";
                echo "<img class='profile-picture' src=\"profileimg/{$fp}\">";
                
                echo "</div>";
          }else{ ?>
    <div class="container-btn col-3">
      <a href="?view=login" class="btn-login">
        <button type="button" class="btn btn-primary login-btn"><i class="bi bi-person-check-fill"></i> Login</button>
      </a>
      <a href="?view=register" class="btn-register"><button type="button" class="btn btn-primary regis-btn"><i
            class="bi bi-person-plus-fill"></i> Register</button>
      </a>
    </div>
    <?php } ?>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-justified">
    <div class="container-fluid">
      <div class="burger" onclick="drop()">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul id="drop" class="navbar-nav nav-links toggle-hide me-auto mb-2 mb-lg-0 nav-fill nav-justified">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><i class="far fa-flag"></i> Nasional</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><i class="bi bi-briefcase"></i> Bisnis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><i class="bi bi-bank2"></i> Politik</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><i class="bi bi-bicycle"></i> Olahraga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><i class="bi bi-cash-coin"></i> Ekonomi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><i class="bi bi-controller"></i> Hiburan</a>
        </li>
      </ul>

      <!-- <form class="d-flex">
        <input class="form-control me-2 src-bar" style="margin:3px" type="search" placeholder="Search"
          aria-label="Search">
        <button class="btn right btn-outline-light src-btn" type="submit"><i class="bi bi-search"></i></button>
      </form> -->

      <!-- <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle user-action"><img src="https://www.tutorialrepublic.com/examples/images/avatar/3.jpg" class="avatar" alt="Avatar"> Antonio Moreno <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-user-o"></i> Profile</a></li>
                        <li><a href="#"><i class="fa fa-calendar-o"></i> Calendar</a></li>
                        <li><a href="#"><i class="fa fa-sliders"></i> Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="material-icons">&#xE8AC;</i> Logout</a></li>
                    </ul>
                </li> -->
    </div>
    </div>
  </nav>
  <div style="height:20px"></div>

  <?php
    include "include/db_connection2.php";

    $sql = "SELECT * FROM berita WHERE id = '001'";
    $result = $db->query($sql);
    
    $row = $result->fetch_assoc();

    // $bid = $_POST['id'];
    // $judul = $_POST['judul'];

  ?>

  <div class="row">
    <div class="col-1"></div>
    <div class="col-lg-7 col-md-12">
      <div class="card col-lg-11 mb-5">
        <img src="assets/bapak.jpg" class="card-img-top news-image" alt="...">
        <div class="card-body main-container">
          <?php 
          echo "<p class='card-text main-card judul-berita'>" . $row['judul'] . "</p>";
          // <p class="card-text main-card">Some quick example text to build on the card title and make up the bulk of the
          //   card's content.</p>
          
          echo "<p class='card-text main-card kategori-berita'>" . $row['kategori'] . "<i class='bi bi-square-fill'></i>" . $row['tanggal'] ."</p>";
        ?>
          <div class="view-main-container">
            <a href="?view=news" class="btn btn-primary view-main-news">Lihat Berita</a>
          </div>
        </div>
      </div>

      <div class="card col-lg-11 mb-5">
        <img src="assets/bapak.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text main-card">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>

        </div>
      </div>

      <div class="card col-lg-11 mb-5">
        <img src="assets/bapak.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text main-card">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-12 color-white">
      <div class="card text-end col-lg-11 side-card">
        <div class="card-body">
          <img src="assets/bapak.jpg" class="card-img-top" alt="...">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary view-news">Lihat Berita</a>
        </div>
      </div>
      <br>
      <div class="card text-end col-lg-11 side-card">
        <div class="card-body">
          <img src="assets/bapak.jpg" class="card-img-top" alt="...">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary view-news">Lihat Berita</a>
        </div>
      </div>
      <br>
      <div class="card text-end col-lg-11 side-card">
        <div class="card-body">
          <img src="assets/bapak.jpg" class="card-img-top" alt="...">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary view-news">Lihat Berita</a>
        </div>
      </div>
    </div>
    <div class="col-1"></div>
  </div>
  </div>
</body>

<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Section: Form -->
  <section class="">
    <form action="">
      <!--Grid row-->
      <div class="row d-flex justify-content-left">
        <!--Grid column-->
        <div class="col-auto">
          <p class="pt-2" style="font-size:5rem; margin-top:2rem;">
            <i class="bi bi-slack"></i><strong>PEM-WEB NEWS</strong>
          </p>
        </div>
      </div>
      <!--Grid row-->
    </form>
  </section>
  <!-- Section: Form -->

  <!-- Section: Text -->
  <!-- <section class="mb-4">
      <p style="font-size:2rem; padding: 5rem;">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section> -->
  <!-- Section: Text -->

  <!-- Section: Links -->
  <section class="">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-7 d-flex justify-content-left footer-kategori">
      </div>


      <!--Grid column-->
      <div class="col-lg-5 mb-4 mb-md-0">
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-white">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 4</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </section>
  <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); font-size:1.5rem;">
    © 2021 Copyright
    <p style="font-size:1rem; padding-top:0.5rem;">Pem-Web News</p>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


</html>