<?php
class Database{
    // $host = untuk memberitau kita menggunakan server lokal yaitu localhost,
    // $user = username dari localhost
    // $pass = password untuk masuk ke localhost mysql kita, kosongkan jika tidak menggunakan password
    // $db = untuk memberi akses kita menggunakan database mana di server lokal kita (localhost)
    public $host = "localhost", $user = "root", $pass = 123, $db = "latihan",
            $koneksi;
    public function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if($this->koneksi){

        }else{
            return "Koneksi Database Gagal!";
        }

    }
}

class Biodata extends Database{
    public function index(){
        $databio = mysqli_query($this->koneksi,"select * from biodata");
        return $databio;
    }
    public function create($nama, $alamat, $tgl_lahir, $jenis_kelamin, $agama, $umur){
        mysqli_query($this->koneksi,"insert into biodata values(null,'$nama','$alamat',
        '$tgl_lahir', '$jenis_kelamin', '$agama', '$umur')");
    }
    public function show($id){
        $databio = mysqli_query($this->koneksi,"select * from biodata where id='$id'");
        return $databio;
    }
    public function edit($id){
        $databio = mysqli_query($this->koneksi,"select * from biodata where id='$id'");
        return $databio;
    }
    public function update($id, $nama, $alamat, $tgl_lahir, $jenis_kelamin, $agama, $umur){
        mysqli_query($this->koneksi,"update biodata set nama='$nama', alamat='$alamat',
        tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin', agama='$agama', umur='$umur' where id='$id'");
    }
    public function delete($id){
        mysqli_query($this->koneksi,"delete from biodata where id='$id'");
    }
}
$db = new Database();
?>