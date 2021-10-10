<?php
    session_start();
    include 'include/db_connection2.php';
?>



<!DOCTYPE html>

<html lang="en">
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

 <!-- <div class="row ctr-container-header">
    <div class="container-logo col-3">
      <i class="bi bi-slack"></i>
    </div>
    <div class="container-header col-6">
      <h1 class="header-berita">PEM-WEB NEWS</h1>
    </div> -->
    <?php
    include 'include/db_connection.php'; 
    if( isset($_SESSION["userName"]) && !empty($_SESSION['userName']) ){
      
          $id = $_SESSION['userName'];
                $result = $db->query("SELECT * FROM user WHERE userName = '$id'");
                $mhs = $result->fetch_assoc();
                $fp = $mhs['foto'];

                echo "<div class='row ctr-container-header'>
                        <div class='container-logo col-3'>
                          <i class='bi bi-slack'></i>
                        </div>
                        <div class='container-header col-6'>
                          <h1 class='header-berita'>PEM-WEB NEWS</h1>
                      </div>";

                echo "<div class='col-3' style='display:flex;'>";
                echo "<a class='btn btn-danger logout-btn' aria-current='page' href='?view=logout'>Logout</a></nav>";
                echo "<p class='login-username'>" . $_SESSION['userName'] . "</p>";
                echo "<img class='profile-picture' src=\"profileimg/{$fp}\" width = '50' height = '50'>";
                
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

<div class="row">
  <div class="container-user-view">
    <a href="?view=dashboard" class="btn btn-danger user-view-btn">View News From User View</a>
  </div>
</div>


<div class='container admin-content'>
    <div class="insert-container">
      <a href='?view=insertberita'>
        <button type='button' class='btn btn-primary insert-btn'>
          <i class='bi bi-plus-circle-fill'></i> Insert Berita
        </button>
      </a>
    </div>
    <div class="table-container">
    <table id='dataTable' class='table table-striped table-bordered dataTable table-light'>
            <thead>
                <tr>
                    <th scope='col'>Judul</th>
                    <th scope='col'>Kategori</th>
                    <th scope='col'>Penulis</th>
                    <th scope='col'>Konten Berita</th>
                    <th scope='col'>Tanggal Publikasi</th>
                    <th scope='col'>Picture</th>
                    <th scope='col'>Action</th>
                </tr>
            </thead>
            

            <tbody>
                 <?php
                 $query = "SELECT * FROM berita";
                  $result = $db->query($query);

                  $berita = [];
                  $news = [];

                  foreach($result as $berita) {
                      $news[] = new berita($berita['id'], $berita['judul'], $berita['kategori'], $berita['penulis'], $berita['konten'], $berita['tanggal'], $berita['gambar']);
                  }
                 foreach($news as $berita){
                    echo "<tr>";
                    echo "<td class='judul-admin'>" . $berita->judul . "</td>";
                    echo "<td>" . $berita->kategori . "</td>";
                    echo "<td>" . $berita->penulis . "</td>";
                    echo "<td class='konten-berita-admin;' id='id-konten;'>". "<div class='admin-row'>" . $berita->konten . "</div>" . "</td>";
                    echo "<td>" . $berita->tanggal . "</td>";
                    echo "<td> <img src=\"{$berita->gambar}\" width = '200' height = '150'> </td>";
                    echo "<td> <a class='action-button' href=\"?view=deleteBerita&id={$berita->id}\" style='color:black; margin-left:0.7rem;'><i class='bi bi-x-square-fill'></i></a>
                               <a class='action-button' href=\"?view=editberita&id={$berita->id}\" style=\"color:black\"><i class='bi bi-pencil-fill'></i></a>
                          </td>";
                 echo "</tr>";
                
                }
                mysqli_free_result($result);
                mysqli_close($db);

                ?>
            </tbody>
                            
            <tfoot>
                   <tr>
                    </tr>
            </tfoot>
    </table>
              </div>
    </div>

    <script>
      function enter(){
        var kid = document.getElementById('id-konten');
        var splitted = kid.textContent.split("\n");
        
        var bebas = splitted.map(text => !text.length ? "<br>" : text)

        kid.innerHTML = bebas.join('');
        console.log(bebas)
       }

      enter();
    </script>
</body>
</html>
