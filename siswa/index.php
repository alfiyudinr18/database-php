<?php
include '../database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD - Read</title>
</head>
<body>
    <center>Data Siswa</center>
    <a href="/siswa/create.php">Input Data Siswa</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No Induk Siswa</th>
            <th>Alamat</th>
            <th colspan="3">Aksi</th>
        </tr>
        <?php
            $siswa = new Siswa();
            $no = 1;
            foreach($siswa->index() as $data){
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nis']; ?></td>
            <td><?= $data['nama']; ?></td>
            <td><?= $data['alamat']; ?></td>
            <td><a href="show.php?id=<?= $data['id']; ?>&aksi=show">Show</a></td>
            <td><a href="edit.php?id=<?= $data['id']; ?>&aksi=edit">Edit</a></td>
            <td><a href="proses.php?id=<?= $data['id']; ?>&aksi=delete">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>