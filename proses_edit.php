
<?php

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$id = $_POST['id'];

include "connection.php";
        $koneksi = new koneksi();
        $db = $koneksi->getKoneksi();
$query = $db->query("UPDATE `data` SET nama='$nama', kelas='$kelas' where id='$id'");

if($query){
    header("location:index.php");
}