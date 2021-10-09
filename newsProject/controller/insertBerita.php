<?php
    session_start();
    include "include/db_connection2.php";

    // function uploadImg() {
    //     $FileName = $_FILES["gambar"]["name"];
    //     $FileSize = $_FILES["gambar"]["size"];
    //     $error = $_FILES["Picture"]["error"];

    //     $FileType = ["jpg", "png", "jpeg"];
    //     $extension = explode(".", $FileName);
    //     $extension = strtolower($extension[count($extension)-1]);

    //     if($error == 4) {
    //         echo "<script>
    //             alert(\"Please Upload News Images!\");
    //         </script>";
    //         return false;
    //     } else if(!in_array($extension, $FileType)) {
    //         echo "<script>
    //             alert(\"Error, Please Upload News Images!\");
    //         </script>";
    //         return false;
    //     } else if($FileSize > 5000000) {
    //         echo "<script>
    //             alert(\"Your file size is too big!\");
    //         </script>";
    //         return false;
    //     }
    //     return uniqid('foto-profil').'.'.$extension;
    // }

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
    
        // //    if($gambar === false) {
        // //     echo "<script>
        // //         alert(\"Gambar gagal diupload!\");
        // //     </script>";
        // //     echo "<script>
        // //         document.location.href='?view=Register';
        // //     </script>";
        // } 
      
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