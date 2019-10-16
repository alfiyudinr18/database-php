<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <title>CRUD - Read</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="create.php">Create<span class="sr-only">(current)</span></a>
        </li>
    </ul>
  </div>
</nav>

<div class="container" style="padding:20px;">
    <div class="page-header"><h1 align="center">Biodata</h1></div>
    <div class="row" style="padding:20px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data</div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Umur</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                            $biodata = new Biodata();
                            $no = 1;
                            foreach($biodata->index() as $data){
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama']; ?></td>
                            <td><?= $data['alamat']; ?></td>
                            <td><?= $data['tgl_lahir']; ?></td>
                            <td><?= $data['jenis_kelamin']; ?></td>
                            <td><?= $data['agama']; ?></td>
                            <td><?= $data['umur']; ?></td>
                            <td><a href="show.php?id=<?= $data['id']; ?>&aksi=show"><button class="btn btn-primary">Show</button></a></td>
                            <td><a href="edit.php?id=<?= $data['id']; ?>&aksi=edit"><button class="btn btn-success">Edit</button></a></td>
                            <td><a href="proses.php?id=<?= $data['id']; ?>&aksi=delete" onclick="return confirm('Apakah Yakin Mau Menghapus?')"><button class="btn btn-danger">Delete</button></a></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>