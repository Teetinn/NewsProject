<!DOCTYPE html>
<html>

<head>
  <title>News</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&family=Staatliches&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

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
    <div class="container-btn col-3">
      <a href="?view=login" class="btn-login">
        <button type="button" class="btn btn-primary login-btn"><i class="bi bi-person-check-fill"></i>Login</button>
      </a>
      <a href="?view=register" class="btn-register"><button type="button" class="btn btn-primary regis-btn"><i
            class="bi bi-person-plus-fill"></i>Register</button>
      </a>
    </div>

    <!--kalo dah login-->
    <?php
            include 'include/db_connection.php';
            if (isset($_POST['userName'])){
                $id = $_POST['userName'];
                $result = $db->query("SELECT * FROM user WHERE userName = '$id'");
                $mhs = $result->fetch_assoc();

                echo $_POST ['userName'];
                echo " <a class='btn btn-danger' aria-current='page' href='?view=login'>Logout</a></nav>";
            }
            ?>
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

  <div class="row">
    <div class="col-1"></div>
    <div class="col-7">
      <div class="card col-lg-11 border-light">
        <img src="../assets/bapak.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text main-card">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
        </div>
      </div>

      <div class="card col-lg-11 border-light">
        <img src="../assets/bapak.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text main-card">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
        </div>
      </div>

      <div class="card col-lg-11 border-light">
        <img src="../assets/bapak.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text main-card">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
        </div>
      </div>
    </div>
    <div class="col-3 color-white">
      <div class="card text-end col-lg-11 side-card">
        <div class="card-body">
          <img src="../assets/bapak.jpg" class="card-img-top" alt="...">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary view-news">Lihat Berita</a>
        </div>
      </div>
      <br>
      <div class="card text-end col-lg-11 side-card">
        <div class="card-body">
          <img src="../assets/bapak.jpg" class="card-img-top" alt="...">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary view-news">Lihat Berita</a>
        </div>
      </div>
      <br>
      <div class="card text-end col-lg-11 side-card">
        <div class="card-body">
          <img src="../assets/bapak.jpg" class="card-img-top" alt="...">
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
<Footer>
  <div class="row container-footer">
    <h2>TELUSURI:</h2>
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
  </div>
  </div>
</Footer>

</html>