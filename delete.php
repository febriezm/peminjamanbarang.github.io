<?php
require_once("database.php");
if ($kode = $_GET['kode']) {
$result = mysqli_query($koneksi,"DELETE FROM barang WHERE id=$kode");
    header("location:data.php"); 
}
else if ($code = $_GET['code']) {
    $result = mysqli_query($koneksi,"DELETE FROM user WHERE id=$code");
        header("location:data_user.php");
} 
else if  ($give = $_GET['give']) {
    $result = mysqli_query($koneksi,"DELETE FROM peminjaman WHERE id=$give");
        header("location:peminjaman.php"); 
}
else  ($given = $_GET['given']); {
    $result = mysqli_query($koneksi,"DELETE FROM peminjaman WHERE id=$given");
        header("location:pem_member.php"); 
}
?>

