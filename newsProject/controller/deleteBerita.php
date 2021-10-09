<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
</head>
<body>
        <?php
            include "include/db_connection2.php"; 
            $id = $_GET['id'];

            if(isset($_GET['id'])){
                $result2 = $db->query("DELETE FROM `berita` WHERE `berita`.`id` = '$id'");
            }
        ?>
        <script>
            document.location.href="?view=admin";
        </script>
</body>
</html>