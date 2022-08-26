<?php
$id = $_GET['id'];

include "connection.php";
        $koneksi = new koneksi();
        $db = $koneksi->getKoneksi();
$query = $db->query("DELETE FROM data WHERE id='$id'");

if($query){
    header("location:index.php");
}