<?php
include 'model/news.php';
    $host = "localhost";
    $username = "root";
    $dbname = "newsproject";
    $password = "";
    $db = new mysqli($host, $username, $password, $dbname);

    $query = "SELECT * FROM berita";
    $result = $db->query($query);

    $berita = [];
    $news = [];

    foreach($result as $berita) {
        $news[] = new berita($berita['id'], $berita['judul'], $berita['kategori'], $berita['penulis'], $berita['konten'], $berita['tanggal'], $berita['gambar']);
    }
?>