<?php 
 require_once("database.php");
    $id = $_POST['id'];
    $kode = $_POST['kode_brg'];
    $nama = $_POST['nama_brg'];
    $kategori = $_POST['kategori'];
    $merk = $_POST['merk'];
    $jml = $_POST['jumlah'];

 
$simpan=inputdata("INSERT INTO barang (id,kode_brg,nama_brg,kategori,merk,jumlah) VALUES ('$id','$kode','$nama','$kategori','$merk','$jml')");
if($simpan) {
header("location:data.php");
}
?>