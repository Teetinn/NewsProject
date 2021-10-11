<?php
    session_start();
    include "include/db_connection2.php";

    $id = $_SESSION['id'];
    $result = $db->query("SELECT * FROM `user` WHERE id = '$id'");
    $mhs = $result->fetch_assoc();

    if(isset ($_POST["upload"])){
          $judul = $_POST["judul"];
           $kategori = $_POST["kategori"];
           $penulis = $_POST["penulis"];
           $konten = $_POST["konten"];
        $tanggal = $_POST["tanggal"];
           $id = uniqid('');
           $gambar = $_POST["gambar"];
      
        $query = "INSERT INTO berita VALUES ('$id', '$judul', '$kategori', '$penulis', '$konten', '$tanggal', '$gambar')";
        mysqli_query($db, $query);
        
        if(mysqli_affected_rows($db) > 0){
            echo "<script>alert('User berhasil ditambahkan')</script>";
            header("Location: ?view=admin");
        } else {
            echo $db->error;
            echo "<script>alert('gagal registrasi')</script>";

        }   
    }

    include "view/insertBerita.php";
?>