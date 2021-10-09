<?php 
  include "include/db_connection.php";
 

    function upload() {
        $namaFile = $_FILES["foto"]["name"];
        $ukuranFile = $_FILES["foto"]["size"];
        $error = $_FILES["foto"]["error"];

        $validExtension = ["jpg", "png", "jpeg"];
        $ext = explode(".", $namaFile);
        $ext = strtolower($ext[count($ext)-1]);

        if($error == 4) {
            echo "<script>
                alert(\"Please upload a file first!\");
            </script>";
            return false;
        } else if(!in_array($ext, $validExtension)) {
            echo "<script>
                alert(\"Error, please upload a picture!\");
            </script>";
            return false;
        } else if($ukuranFile > 5000000) {
            echo "<script>
                alert(\"Your file size is way too big!\");
            </script>";
            return false;
        }

        return uniqid('foto-profil').'.'.$ext;
    }

    if( isset($_POST["submit"]) ) {
        if(empty($_POST['namaDepan']) || empty($_POST['namaBelakang']) || empty($_POST['userName']) || empty($_POST['tgl_lahir']) || empty($_POST['jenisKelamin']) || empty($_POST['password']) || empty($_POST['konfirmasiPassword'])){
            echo '<script>alert("All fields are required")</script>';
        }else{
        if(strcmp($_POST['password'], $_POST['konfirmasiPassword']) != 0) {
            echo "<script>
                alert('Password salah');
                document.location.href='?view=register';
            </script>";
            die;
        }

        $namaDepan = $_POST["namaDepan"];
        $namaBelakang = $_POST["namaBelakang"];
        $userName = $_POST["userName"];
        $jenisKelamin = $_POST["jenisKelamin"];
        $tgl_lahir = $_POST["tgl_lahir"];
        $id = uniqid('');
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $foto = upload();
        $type = 'user';

        if($foto === false) {
            echo "<script>
                alert(\"User Gagal Ditambahkan!\");
            </script>";
            echo "<script>
                document.location.href='?view=register';
            </script>";
            die;
        } 

        $query = "INSERT INTO user VALUE ('$namaDepan', '$namaBelakang', '$userName','$tgl_lahir','$jenisKelamin', '$id', '$password', '$foto','$type')";

        mysqli_query($db, $query);

        if(mysqli_affected_rows($db) > 0){
            move_uploaded_file($_FILES["foto"]["tmp_name"], "profileimg/{$foto}");
                    echo "<script>alert('user berhasil ditambahkan')</script>";
                    header("Location: ?view=login");
        }else {
            echo $db->error;
            echo "<script>alert('gagal registrasi')</script>";
        }
    }
}
 include "view/register.php";
?>

