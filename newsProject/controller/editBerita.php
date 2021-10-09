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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <form action="" method="post">
            <label for="id">id Berita</label>
            <input disabled type="number" name="id" placeholder="<?="{$berita['id']}";?>" value="<?="{$berita['id']}";?>" size="30"><br><br>
            <input type="hidden" name="id" value="<?="{$berita['id']}";?>"><br>

            <label for="Judul">Judul Berita : </label>
            <input type="text" name="judul" value="<?="{$berita['judul']}";?>" size="40"><br><br>

            <label for="kategori">Kategori Berita : </label>
            <input type="text" name="kategori" value="<?="{$berita['kategori']}";?>" size="40"><br><br>

            <label for="penulis">Penulis Berita : </label>
            <input id="penulis" name="penulis" value="<?="{$berita['penulis']}";?>" size="40"><br><br>

            <label for="konten">Konten Berita :</label>
            <input id="konten" name="konten" value="<?="{$berita['konten']}";?>" size="40"><br><br>

            <label for="tanggal">Tanggal Publikasi :</label>
            <input type="date" id="tanggal" name="tanggal" value="<?="{$berita['tanggal']}";?>"><br><br>

            <label for="gambar">Gambar :</label>
            <input type="text" id="gambar" name="gambar" value="<?="{$berita['gambar']}";?>" size="100"><br><br>

            <input type="submit" name="submit" class="btn btn-primary" value="Update">
            </form>
            <form action="?view=admin" method="POST">
              <button type="submit" name="back" class="btn btn-danger">Cancel</button>
            </form>
    </div>
<?php
    
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $kategori = $_POST['kategori'];
        $penulis = $_POST['penulis'];
        $konten = $_POST['konten'];
        $tanggal = $_POST['tanggal'];
        $gambar = $_POST['gambar'];

        $result1 = $db->query("UPDATE `berita` SET `id` ='$id', `judul`='$judul', `kategori`='$kategori', `penulis`='$penulis', `konten`='$konten', `tanggal`='$tanggal', `gambar`='$gambar' WHERE `berita`.`id` = '$id'");

           if( mysqli_affected_rows($db) > 0) {
            echo "<script>
                  alert('DATA BERHASIL DIUPDATE!');
                  </script>";
            header("Location: ?view=admin");
           }else {
             echo "<script> alert('data gagal DIUPDATE!'); 
             </script>";
           }
    }
?>
</body>
</html>