<?php
include 'database.php';
$biodata = new Biodata();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <title>CRUD- Edit</title>
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

    <?php
        foreach($biodata->edit($_GET['id']) as $data){
            $id = $data['id'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $tgl_lahir = $data['tgl_lahir'];
            $jenis_kelamin = $data['jenis_kelamin'];
            $agama = $data['agama'];
        }
    ?>

<div class="container" style="padding:20px;">
    <div class="page-header"><h1 align="center">Edit</h1></div>
    <div class="row" style="padding:20px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data</div>
                <div class="card-body">
                    <form action="proses.php?aksi=update" method="post">
                        <input type="hidden" name="id" value="<?= $id; ?>">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" value="<?= $nama; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" cols="40" class="form-control"><?= $alamat; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" value="<?= $tgl_lahir; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Agama</label>
                                <select name="agama" value="<?= $agama; ?>" class="form-control">
                                    <option value="Islam" <?php if($agama == "Islam"){?>selected <?php } ?>>Islam</option>
                                    <option value="Kristen" <?php if($agama == "Kristen"){?>selected <?php } ?>>Kristen</option>
                                    <option value="Budha" <?php if($agama == "Budha"){?>selected <?php } ?>>Budha</option>
                                    <option value="Hindu" <?php if($agama == "Hindu"){?>selected <?php } ?>>Hindu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label><br>
                                <div class="form-check-inline form-control">
                                    <label class="form-check-label">
                                        <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if($jenis_kelamin == "Laki-laki"){?>checked <?php } ?>>Laki-laki<br>
                                    </label>
                                </div>
                                <div class="form-check-inline form-control">
                                    <label class="form-check-label">
                                        <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if($jenis_kelamin == "Perempuan"){?>checked <?php } ?>>Perempuan<br>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <div class="row justify-content-center">
                                        <input type="submit" name="save" value="Update" class="btn btn-primary">
                                        <a href="index.php"><input type="submit" value="Kembali" class="btn btn-success"></a>
                                    </div>
                                </div>
                            </div>
                    </form>
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