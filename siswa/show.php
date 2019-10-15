 <?php 
include '../database.php';
$siswa = new Siswa();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD - Show</title>
</head>
<body>
    <?php 
        foreach($siswa->show($_GET['id']) as $data)
        {
            $id = $data['id'];
            $nis = $data['nis'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
        }
    ?>
    <fieldset>
        <legend>Show Data Siswa</legend>
        <table>
            <tr>
                <th>Nomor Induk Siswa</th>
                <td><input type="number" name="nis" value="<?= $nis; ?>"readonly></td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <td><input type="text" name="nama" value="<?= $nama; ?>" readonly></td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <td><textarea name="alamat" cols="40" readonly><?= $alamat; ?></textarea></td>
            </tr>
        </table>
    </fieldset>
</body>
</html>