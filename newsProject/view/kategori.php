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
          <a class="nav-link" aria-current="page" href="?view=dashboard"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?view=kategori&kategori=nasional"><i class="far fa-flag"></i> Nasional</a>
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

<!-- <?php
   
        echo $ktr ['judul'];
        echo $ktr ['konten'];
        echo $ktr ['kategori'];
        echo $ktr ['tanggal'];
    

?> -->

<div class='row thumbnail-row'>
     <!-- <div class='col-1'></div> -->
                
   <?php
    // include 'include/db_connection2.php';
    //   $query = "SELECT * FROM berita";

    //     $result = $db->query($query);
            
    //     $berita = [];
    //     $news = [];
        
    //     $ctr = 0;

    //     foreach($result as $berita) {
    //         $news[] = new berita($berita['id'], $berita['judul'], $berita['kategori'], $berita['penulis'], $berita['konten'], $berita['tanggal'], $berita['gambar']);
    //         $ctr++;
    //     }

        $randomID = rand(0, 3);
        
          echo "
              <div class='col-lg-9 col-md-12' style='margin-left:5rem;'>
                <div class='card col-lg-11 mb-5'>
                  <img src=\"{$ktr['gambar']}\" class='card-img-top news-image' alt='...'>
                  <div class='card-body main-container'>
              ";

          echo "<p class='card-text main-card judul-berita'>" . $ktr['judul'] . "</p>";
          echo "<p class='card-text main-card kategori-berita'>" . $ktr['kategori'] . "<i class='bi bi-square-fill'></i>" . $ktr['tanggal'] ."</p>";

          echo "      
              <div class='view-main-container'>
                <a href=\"?view=news&id={$ktr['id']}\" class='btn btn-primary view-main-news'>Lihat Berita</a>
              </div>
            </div>
          </div>
          </div>";
          echo " <div class='col-lg-2 col-md-12 color-white'>
             ";

        // $query = "SELECT * FROM berita WHERE kategori = '$kategori'";
        //           $result = $db->query($query);

                  $outputKTR = [];
                  $hasil = [];

                //   foreach($result as $outputKTR) {
                     
                //   }


                foreach($hasil as $outputKTR){
                    $hasil[] = new outputKTR($outputKTR['id'], $outputKTR['judul'], $outputKTR['kategori'], $outputKTR['penulis'], $outputKTR['konten'], $outputKTR['tanggal'], $outputKTR['gambar']);
                    echo "<tr>";
                    echo "<td class='judul-admin'>" . $outputKTR->judul . "</td>";
                    echo "<td>" . $outputKTR->kategori . "</td>";
                    echo "<td>" . $outputKTR->penulis . "</td>";
                    echo "<td class='konten-berita-admin;' id='id-konten;'>". "<div class='admin-row'>" . $outputKTR->konten . "</div>" . "</td>";
                    echo "<td>" . $outputKTR->tanggal . "</td>";
                    echo "<td> <img src=\"{$outputKTR->gambar}\" width = '200' height = '150'> </td>";
                    // echo "<td> <a class='action-button' href=\"?view=deleteBerita&id={$outputKTR->id}\" style='color:black; margin-left:0.7rem;'><i class='bi bi-x-square-fill'></i></a>
                    //            <a class='action-button' href=\"?view=editberita&id={$outputKTR->id}\" style=\"color:black\"><i class='bi bi-pencil-fill'></i></a>
                    //       </td>";
                 echo "</tr>";
                }
    
      for($i = 0; $i < 3; $i++){
          $randomID = mt_rand(0, 3);
             echo "
              <div class='row'>
              <div class='card text-end col-lg-11 side-card'>
                <div class='card-body'>
                  <img src=\"{$ktr['gambar']}\" class='card-img-top' alt='...'>
                  <h5 class='card-title'>{$ktr['judul']}</h5>
                  <a href=\"?view=news&id={$ktr['id']}\" class='btn btn-primary view-news'>Lihat Berita</a>
                </div>
              </div>
              <br>
              </div>";
          }
          echo "</div></div>";
          // $mysqli -> close();
      ?>

          <script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>

</body>
</html>