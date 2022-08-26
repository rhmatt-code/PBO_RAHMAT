<?php
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

include "connection.php";
        $koneksi = new koneksi();
        $db = $koneksi->getKoneksi();
$query = $db->query("INSERT INTO data VALUES('', '$nama', '$kelas')");

if($query){
    header("location:index.php");
}