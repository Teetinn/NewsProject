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

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

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
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

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
                  echo "<div class='col-3' style='display:flex;'>";
                  echo "<div class='container-menu'>";
                } else{
                    echo "<div class='col-3' style='display:flex;'>";
                    echo "<a class='btn btn-danger crud-btn' href='?view=admin'>CRUD Berita</a>";
                }
                echo "<a class='btn btn-danger logout-btn' aria-current='page' href='?view=logout'>Logout</a></nav>";
                echo "<p class='login-username'>" . $_SESSION['userName'] . "</p>";
                echo "<img class='profile-picture' src=\"profileimg/{$fp}\">";
                echo "</div>";
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
          <a class="nav-link active" aria-current="page" href="?view=dashboard"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?view=kategori&kategori=nasional"><i class="far fa-flag"></i> Nasional</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?view=kategori&kategori=bisnis"><i class="bi bi-briefcase"></i> Bisnis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?view=kategori&kategori=politik"><i class="bi bi-bank2"></i> Politik</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?view=kategori&kategori=olahraga"><i class="bi bi-bicycle"></i> Olahraga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?view=kategori&kategori=ekonomi"><i class="bi bi-cash-coin"></i> Ekonomi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?view=kategori&kategori=hiburan"><i class="bi bi-controller"></i> Hiburan</a>
        </li>
      </ul>
   </div>
    </div>
  </nav>

<div class='row thumbnail-row'>


        <div class='container-kategori'>
        
<?php 
        foreach($hasil as $outputKTR){
            
            echo "<div class='row kategori-row'>";
            echo "<div class='card text-end col-lg-8 offset-lg-2 kategori-card' data-aos='fade-right'>";
            echo "<div class='card-body'>";
            echo "<div class='row'>";
            
            echo "<div class='col-4'>";
            echo "<a href=\"?view=news&id={$outputKTR['id']}\"><img class='kategori-gambar' src='{$outputKTR['gambar']}'></a>";
            echo "</div>";

            echo "<div class='col-8'>";
            echo "<h5 class='kategori-title'>" . $outputKTR['judul'] . "</h5>";
            echo "<a href=\"?view=news&id={$outputKTR['id']}\" class='btn btn-primary view-news'>Lihat Berita</a>";
            echo "</div>";
            echo "</div>
                </div>
                <br>
              </div>";
              }   
            echo "</div>";
            echo "</div>";
           
?>
     </div>
</body>

</html>

