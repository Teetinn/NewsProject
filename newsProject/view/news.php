<?php
  session_start();
  INCLUDE 'include/db_connection2.php';
  if(isset($_GET['id'])){
    $idnews = $_GET['id'];
    $query = "SELECT id, judul, kategori, penulis, konten, DATE_FORMAT(tanggal, '%W, %D %M %Y') 'tanggal', gambar FROM berita WHERE id ='$idnews'";
    $resultberita = $db->query($query);

    $berita = $resultberita->fetch_assoc();
    // echo $berita['judul'];
    // echo $berita['tanggal'];
    // echo "<div>
    // <img src='{$berita['gambar']}'>
    //       </div>";
    // echo $berita['konten'];
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

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&family=Staatliches&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

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
          <button type="button" class="btn btn-primary login-btn"><i class="bi bi-person-check-fill"></i>Login</button>
        </a>
        <a href="?view=register" class="btn-register"><button type="button" class="btn btn-primary regis-btn"><i
              class="bi bi-person-plus-fill"></i>Register</button>
        </a>
      </div>
    <?php } ?>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-justified">
    <div class="container-fluid">
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
<<<<<<< HEAD
      <div class="col-7" >
        <div class="card col-lg-11 mb-5">
          

          <div class="card-body main-container">
          <?php  
            echo "<p class='card-text main-card judul-berita'>" . $berita['judul'] . "</p>";
            echo "<p class='card-text main-card kategori-berita'>" . $berita['kategori'] . "<i class='bi bi-square-fill'></i>" . $berita['tanggal'] ."</p>";
            echo "<img src=\"{$berita['gambar']}\" class='card-img-top news-image' alt='...'>";   
            echo "<p id='id-konten' class='card-text main-card konten-berita'>" . $berita['konten'] . "</p>";
          ?>

          
            <div class="comment-container" id="comment-form">
              <h1 class="header-comment">Komentar</h1>
              <?php
                echo "<form method='POST' action=''>
                  <input type='hidden' name='uid' value='Anonymous'>
                  <input type='hidden' name='date' value=''>
                  <textarea class='space-comment' id='Comment' rows='4' cols='50' name='Comment'>
                  </textarea>

                  <button type='submit' name='submitcomment' value='submit' class='btn btn-primary mt-3'>Kirim</button>
                </form>";

                $resultberita = $db->query("SELECT * FROM comments WHERE IDberita = '$idnews'");
                
                foreach($resultberita as $comment) {
                $idKomen = uniqid('');
                // $idKomen = $comment['IDkomen'];
                $username = $comment['userName'];
                
                $hasiltUsername = $db->query("SELECT * FROM user WHERE userName = '$username'");
                $comment['profile'] = $hasilUsername->fetch_assoc()['gambar'];

                echo "
                    <div class=\"col-xl-11 col-lg-10 col-md-11 col-sm-10 col-10\">
                    <img src=\"profileimg/{$comment['profile']}\" alt=\"user-profile\" class=\"user-image\" width='100' height='100'>
                    </div>
                      <h4 class=\"commenter-name\">{$comment['userName']}</h4><span class=\"comment-date\">{$comment['tanggalKomen']}</span>
                      <p class=\"comment-content\">{$comment['isi']}</p>
                      <a href=\"?view=detailberita&id={$idnews}&tujuan={$idKomen}\">
                      </a>
                    </div>";
                }
              ?>
            </div>
=======
    <div class="col-7" >
      <div class="card col-lg-11 mb-5">
        

        <div class="card-body main-container">
        <?php  
          echo "<p class='card-text main-card judul-berita'>" . $berita['judul'] . "</p>";
          echo "<p class='card-text main-card kategori-berita'>" . $berita['kategori'] . "<i class='bi bi-square-fill'></i>" . $berita['tanggal'] ."</p>";
          echo "<img src=\"{$berita['gambar']}\" class='card-img-top news-image' alt='...'>";   
          echo "<p id='id-konten' class='card-text main-card konten-berita'>" . $berita['konten'] . "</p>";
        ?>

        
          <div class="comment-container" id="comment-form">
            <h1 class="header-comment">Komentar</h1>
            <?php
              echo "<form method='POST' action=''>
                <input type='hidden' name='uid' value='Anonymous'>
                <input type='hidden' name='date' value=''>
                <textarea class='space-comment' rows='4' cols='50' name='message'>
                </textarea>
                <button type='submit' name='commentSubmit' class='commentSubmit'>Kirim</button>
              </form>";
            ?>
>>>>>>> 3837b3fb446345fc0bcfee967a83fe7b50fd06de
          </div>
      </div>
    </div>

    <?php
      echo " <div class='col-lg-3 col-md-12 color-white news-sidebar clearfix'>";
 
      for($i = 0; $i < 5; $i++){
          $randomID = mt_rand(0, 12);

             echo "
              <div class='row'>
                <div class='card text-end col-lg-11 side-card'>
                  <div class='card-body'>
                    <img src=\"{$news[$randomID]->gambar}\" class='card-img-top' alt='...'>
                    <h5 class='card-title'>{$news[$randomID]->judul}</h5>
                    <a href=\"?view=news&id={$news[$randomID]->id}\" class='btn btn-primary view-news'>Lihat Berita</a>
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