<?php
  session_start();
  INCLUDE 'include/db_connection2.php';
  include 'include/db_connection.php'; 
  if(isset($_GET['id'])){
    $idnews = $_GET['id'];
    $query = "SELECT id, judul, kategori, penulis, konten, DATE_FORMAT(tanggal, '%W, %D %M %Y') 'tanggal', gambar FROM berita WHERE id ='$idnews'";
    $resultberita = $db->query($query);

    $berita = $resultberita->fetch_assoc();
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Pem-Web News</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="assets/app.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&family=Staatliches&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

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
    if( isset($_SESSION["userName"]) && !empty($_SESSION['userName']) ){
      $id = $_SESSION['userName'];
            $result = $db->query("SELECT * FROM user WHERE userName = '$id'");
            $mhs = $result->fetch_assoc();
            $fp = $mhs['foto'];
            if($mhs['type'] == "user"){
                    echo "<div class='col-3' style='display:flex;'>";
                    echo "<div class='container-menu'>";
                  } else{
                      echo "<div class='col-3 logout-container'>";
                      echo "<a class='btn btn-danger crud-btn' href='?view=admin'>CRUD Berita</a>";
                  }
                  echo "<a class='btn btn-danger logout-btn' aria-current='page' href='?view=logout'>Logout</a>";
                  echo "<div class='user-pp-container'>";
                  echo "<p class='login-username'>" . $_SESSION['userName'] . "</p>";
                  echo "<img class='profile-picture' src=\"profileimg/{$fp}\">";
                  echo "</div>";
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
          <a class="nav-link" aria-current="page" href="?view=kategori&kategori=nasional"><i class="far fa-flag"></i> Nasional</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="?view=kategori&kategori=bisnis"><i class="bi bi-briefcase"></i> Bisnis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="?view=kategori&kategori=politik"><i class="bi bi-bank2"></i> Politik</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="?view=kategori&kategori=olahraga"><i class="bi bi-bicycle"></i> Olahraga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="?view=kategori&kategori=ekonomi"><i class="bi bi-cash-coin"></i> Ekonomi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="?view=kategori&kategori=hiburan"><i class="bi bi-controller"></i> Hiburan</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>

  <div style="height:20px"></div>


  <div class="row">
    <div class="col-1"></div>
    <div class="col-lg-7 col-mb-12">
      <div class="card col-lg-11 col-mb-12 mb-5">
        
        <div class="card-body main-container">
        <?php  
          echo "<p class='card-text main-card judul-berita'>" . $berita['judul'] . "</p>";
          echo "<p class='card-text main-card kategori-berita'>" . $berita['kategori'] . "<i class='bi bi-square-fill'></i>" . $berita['tanggal'] ."</p>";
          echo "<img src=\"{$berita['gambar']}\" class='card-img-top news-image' alt='...'>";   
          echo "<p id='id-konten' class='card-text main-card konten-berita'>" . $berita['konten'] . "</p>";
        ?>

          <div class="comment-container" id="comment-form">
            <h1 class="header-comment">Komentar</h1>
            <form class="myForm" method="post">
                <label for="Comment" class="form-label">Comments</label>
              <textarea name="Comment" class="form-control" id="Comment" placeholder="Comment" cols="30"
                    rows="5"></textarea>
                    <input type="Submit" name="submitcomment" value="submit" class="btn btn-primary mt-3">
                  </div>
            </form>

            <?php

              $resultberita = $db->query("SELECT * FROM comments WHERE IDberita = '$idnews'");
              
              foreach($resultberita as $comment) {
        
              $idKomen = $comment['IDkomen'];
              $username = $comment['userName'];

              $hasilUsername = $db->query("SELECT * FROM user WHERE userName = '$username'");
              $comment['profile'] = $hasilUsername->fetch_assoc()['foto'];
                
                
              echo "
                <div class=\"view-comment-container\">
                  <div class=\"user-komentar\" style=\"display:flex\">
                    <img src=\"profileimg/{$comment['profile']}\" alt=\"user-profile\" class=\"user-image\" width='50' height='50'>
                    <h4 class=\'commenter-name\' style=\"padding:4px\">{$comment['userName']}</h4>
                    <h5 class=\'comment-date\' style=\"padding:6px; color:red;\">{$comment['tanggalKomen']}</h5>
                  </div>";
                    echo "
                    <div class=\"komentar \">
                    <h4 class=\"comment-content\">{$comment['isi']}</h4>
                    </div>
                  </div>";       
              }
            ?>
          </div>
      </div>
    </div>
            
    <?php
      echo " <div class='col-lg-3 col-md-12 color-white news-sidebar'>";
      for($i = 0; $i < 5; $i++){
          // $randomID = mt_rand(0, 12);
             echo "
              <div class='row'>
                <div class='card text-end col-lg-11 side-card' data-aos='fade-left''>
                  <div class='card-body'>
                    <img src=\"{$news[$i]->gambar}\" class='card-img-top' alt='...'>
                    <h5 class='card-title'>{$news[$i]->judul}</h5>
                    <a href=\"?view=news&id={$news[$i]->id}\" class='btn btn-primary view-news'>Lihat Berita</a>
                  </div>
                </div>
                <br>
              </div>";
          }
          echo "</div>";
      ?>

  <footer class="bg-dark text-center text-white">
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


  <!-- Copyright -->
  <div class="text-center p-3" style="background-color:#181b1d; color: white; font-size:1.5rem;">
    © 2021 Copyright 
    <p style="font-size:1rem; padding-top:0.5rem;">Pem-Web News</p>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<script>
  function enter(){
    var kid = document.getElementById('id-konten');
    var splitted = kid.textContent.split("\n");
    
    var bebas = splitted.map(text => !text.length ? "<br><br>" : text)

    kid.innerHTML = bebas.join('');
    console.log(bebas)
    }

  enter();
</script>
</body>
</html>