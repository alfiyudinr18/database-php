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
    <title>CRUD - Show</title>
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
    <div class="page-header"><h1 align="center">Show</h1></div>
    <div class="row" style="padding:20px;">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <?php 
                    foreach($biodata->show($_GET['id']) as $data)
                    {
                        $id = $data['id'];
                        $nama = $data['nama'];
                        $alamat = $data['alamat'];
                        $tgl_lahir = $data['tgl_lahir'];
                        $jenis_kelamin = $data['jenis_kelamin'];
                        $agama = $data['agama'];
                    }
                ?>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" value="<?= $nama; ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" cols="40" class="form-control" readonly><?= $alamat; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" value="<?= $tgl_lahir; ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label><br>
                        <?php if($jenis_kelamin == "Laki-laki"){ ?>
                            <input type="radio" name="jenis_kelamin" value="Laki-laki"checked readonly>Laki-laki<br>
                            <?php }else{ ?>
                            <input type="radio" name="jenis_kelamin" value="Perempuan" checked readonly>Perempuan<br>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="">Agama</label>
                        <select name="agama" value="<?= $agama; ?>" class="form-control" readonly>
                        <?php if($agama == "Islam"){ ?>
                            <option value="Islam" readonly>Islam</option>
                        <?php } elseif($agama == "Kristen"){ ?>
                            <option value="Kristen" readonly>Kristen</option>
                        <?php }elseif($agama == "Budha"){ ?>
                            <option value="Budha" readonly>Budha</option>
                        <?php }elseif($agama == "Hindu"){ ?>
                            <option value="Hindu" readonly>Hindu</option>
                        <?php } ?>
                        </select>
                    </div>
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