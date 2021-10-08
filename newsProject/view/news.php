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
    if( isset($_POST['userName']) && !empty($_POST['userName']) ){
      $id = $_POST['userName'];
            $result = $db->query("SELECT * FROM user WHERE userName = '$id'");
            $mhs = $result->fetch_assoc();

            echo "<div class='col-3' style='display:flex; align-items:right;'>";
            echo "<p style='font-family: Oswald, sans-serif; font-size:3rem; margin-left:15rem; padding:2rem;'>" . $_POST ['userName'] . "</p>";
            echo "</div>";

            echo " <a class='btn btn-danger' aria-current='page' href='?view=login'>Logout</a></nav>";
        ?>
    <?php }else{ ?>
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
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-fill nav-justified">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#"><i class="bi bi-briefcase"></i> Bisnis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-bank2"></i> Politik</a>
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

      <form class="d-flex">
        <input class="form-control me-2 src-bar" style="margin:3px" type="search" placeholder="Search"
          aria-label="Search">
        <button class="btn right btn-outline-light src-btn" type="submit"><i class="bi bi-search"></i></button>
      </form>

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

   <script>
      str.replace("\n", "<br />","g");
      
    </script>

  <div class="row">
    <div class="col-1"></div>
    <div class="col-7" >
      <div class="card col-lg-11 mb-5">
        <img src="assets/bapak.jpg" class="card-img-top news-image" alt="...">
        <div class="card-body main-container">
        <?php 
         
          echo "<p class='card-text main-card judul-berita'>" . $row['judul'] . "</p>";
        
          echo "<p class='card-text main-card konten-berita'>" . $row['konten'] . "</p>";
        ?>
          <!-- <div class="view-main-container">
            <a href="?view=news" class="btn btn-primary view-main-news">Lihat Berita</a>
          </div> -->
        </div>
      </div>
    </div>

 
</body>
</html>