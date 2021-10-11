<?php
  include "include/db_connection.php";
    if($_GET["kategori"] == "nasional") $kategori = "nasional";
    else if($_GET["kategori"] == "bisnis") $kategori = "bisnis";
    else if($_GET["kategori"] == "politik") $kategori = "politik";
    else if($_GET["kategori"] == "olahraga") $kategori = "olahraga";
    else if($_GET["kategori"] == "ekonomi") $kategori = "ekonomi";
    else if($_GET["kategori"] == "hiburan") $kategori = "hiburan";

    $query = "SELECT id, judul, kategori, penulis, konten, tanggal, gambar FROM berita WHERE kategori = '$kategori'";
    $result = $db->query($query);
   
    while($ktr = $result->fetch_assoc()){
     $hasil[] = $ktr;
     }

  include "view/kategori.php";
?>