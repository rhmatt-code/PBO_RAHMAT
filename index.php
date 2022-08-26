<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Halaman Admin</title>
</head>
<body>
    <?php
        include "connection.php";
        $koneksi = new koneksi();
        $db = $koneksi->getKoneksi();
        $data = $db->query("SELECT * FROM data")->fetchAll();
        ?>
        <div class="container-sm">
        <h1>Table Siswa</h1>
        <table class="table table-bordered border-info">
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Role</th>
                <th>Action</th>
            </tr>

        <?php foreach($data as $datas):?>
            <tr>
                <td><?= $datas['id'] ?></td>
                <td><?= $datas['nama'] ?></td>
                <td><?= $datas['kelas'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $datas['id'] ?>"class="btn btn-info">Update</a>
                    <a href="proses_hapus.php?id=<?= $datas['id'] ?>"class="btn btn-info">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>

        </table>
		<a href="tambah.php">Tambah Siswa</a>
        </div>
</body>
</html>