<?php
    $host = "localhost";
    $username = "root";
    $dbname = "newsproject";
    $password = "";
    $db = new mysqli($host, $username, $password, $dbname);

    $query = "SELECT * FROM berita";
    $result = $db->query($query);
   
?>