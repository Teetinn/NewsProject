<?php
include "include/db_connection2.php";
include "include/db_connection.php";
    $idnews = $_GET['id'];
    $resultberita = $db->query("SELECT * FROM `berita` WHERE `berita`.`id` = '$idnews'");
    $berita = $resultberita->fetch_assoc();
    session_start();

    $id = $_SESSION['id'];
    $result = $db->query("SELECT * FROM `user` WHERE id = '$id'");
    $mhs = $result->fetch_assoc();
   
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">

      <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"/>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>

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
    </div>
    <div class="container-header col-6">
      <h1 class="header-berita">PEM-WEB NEWS</h1>
    </div>
    <div class="col-3">
    
    </div>
</div>

<div class="row">
    <div class="col-4"></div>

<div class="col-4">
    <div class = "container insert-data-container">
    
        <form class="insert-form" action="" method="POST" enctype="multipart/form-data">
            <label for="id" class="form-label">ID Berita</label>
                <input disabled type="number" class="form-control input-box" name="id" placeholder="<?="{$berita['id']}";?>" value="<?="{$berita['id']}";?>" size="30"><br><br>
                <input type="hidden" name="id" value="<?="{$berita['id']}";?>"><br>
            <div class="col mb-3">
                <label for="judul" class="form-label">Judul Berita</label>
                <input type="text" class="form-control input-box" name="judul" value="<?="{$berita['judul']}";?>" size="40"><br><br>
            </div>
            
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori Berita</label>
                <input type="text" class="form-control input-box" name="kategori" value="<?="{$berita['kategori']}";?>">
            </div>

            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control input-box" id="penulis" name="penulis" value="<?="{$berita['penulis']}";?>" placeholder="Penulis Berita" >
            </div>
            <div class="mb-3">
                <label for="konten" class="form-label">Konten Berita</label>
                <textarea type="text" class="form-control" id="konten" name="konten" value="<?="{$berita['konten']}";?>" placeholder="Konten Berita" cols="40" rows="5"></textarea>
            </div>
                <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal Publikasi</label>
                <input type="date" class="form-control input-box" id="tanggal" name="tanggal" value="<?="{$berita['tanggal']}";?>" placeholder="Tanggal Berita" >
            </div>
            
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="text" class="form-control input-box" id="gambar" name="gambar" value="<?="{$berita['gambar']}";?>" size="100" placeholder="Link Gambar Berita" >
            </div>

                <button type="submit" name="Update" class="btn btn-primary upload-btn" value="Update">Update</button> 
            </form>
            <form action="?view=admin" method="POST">
                <button type="submit" name="back" class="btn btn-danger cancel-btn">Cancel</button>
            </form> 
         </div> 
    </div>
<div class="col-4"></div>
</div>


<?php
    if(isset($_POST['Update'])){
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $kategori = $_POST['kategori'];
        $penulis = $_POST['penulis'];
        $konten = $_POST['konten'];
        $tanggal = $_POST['tanggal'];
        $gambar = $_POST['gambar'];

        $result1 = $db->query("UPDATE `berita` SET `id` ='$id', `judul`='$judul', `kategori`='$kategori', `penulis`='$penulis', `konten`='$konten', `tanggal`='$tanggal', `gambar`='$gambar' WHERE `berita`.`id` = '$id'");

           if( mysqli_affected_rows($db) > 0) {
               echo "<script> alert('Data berhasil di Update!'); 
             </script>";
                echo "<script>document.location.href='?view=admin'</script>";
           }else {
             echo "<script> alert('Data Gagal di Update!'); 
             </script>";
           }
    }
?>
</body>
</html>