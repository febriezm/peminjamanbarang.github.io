<?php 
 require_once("database.php");
    $id = $_POST['id'];
    $tgl_pin = $_POST['tgl_pinjam'];
    $tgl_kem = $_POST['tgl_kembali'];
    $no_iden = $_POST['no_identitas'];
    $kode_brg = $_POST['kode_barang'];
    $jml = $_POST['jumlah'];
    $keperluan = $_POST['keperluan'];

$simpan=inputdata("INSERT INTO peminjaman (id,tgl_pinjam,tgl_kembali,no_identitas,kode_barang,jumlah,keperluan) VALUES ('$id','$tgl_pin','$tgl_kem','$no_iden','$kode_brg','$jml','$keperluan')");
if($simpan) {
header("location:pem_member.php");
}
?>