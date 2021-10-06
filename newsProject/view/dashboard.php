<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="assets/main.css"> -->
    <link rel="stylesheet" href="assets/main.css">
    <title>Berita Pasti Bisa</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-dark navbar-bg">
        <div class="container">
            <a href="#" class="navbar-brand">Berita Pasti Bisa</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="#"></a>
            <a class="flex-sm-fill text-sm-center nav-link" href="#"></a>
            <a class="flex-sm-fill text-sm-center nav-link disabled"></a>
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
            
                <a href="?view=login" class="link btn-login">Login</a>
                <a href="?view=register" class="link btn-register">Register</a>
            </div>
        </div>

</body>

</html>