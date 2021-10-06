<?php 
  include "include/db_connection.php";

    if( isset($_POST["submit"]) ) {
        if(strcmp($_POST['password'], $_POST['konfirmasiPassword']) != 0) {
            echo "<script>
                alert('Password salah');
                document.location.href='?view=register';
            </script>";
            die;
        }
        //sffss

        $namaDepan = $_POST["namaDepan"];
        $namaBelakang = $_POST["namaBelakang"];
        $userName = $_POST["userName"];
        $jenisKelamin = $_POST["jenisKelamin"];
        $tgl_lahir = $_POST["tgl_lahir"];
        $id = uniqid('');
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        //$gambar = upload();

        // if($gambar === false) {
        //     echo "<script>
        //         alert(\"Mahasiswa Gagal Ditambahkan!\");
        //     </script>";
        //     echo "<script>
        //         document.location.href='?view=register';
        //     </script>";
        //     die;
        // } 

        $query = "INSERT INTO user VALUE ('$namaDepan', '$namaBelakang', '$userName','$tgl_lahir','$jenisKelamin', '$id', '$password')";

        mysqli_query($db, $query);

 if(mysqli_affected_rows($db) > 0){
    echo "<script>alert('User berhasil ditambahkan')</script>";
    header("Location: ?view=login");
 }else {
     echo $db->error;
     echo "<script>alert('gagal registrasi')</script>";
 }
}
INCLUDE  "view/register.php";


?>