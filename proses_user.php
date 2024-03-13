<?php 
 require_once("database.php");
    $id = $_POST['id'];
    $no_ide = $_POST['no_identitas'];
    $nama = $_POST['nama'];
    $status = $_POST['status'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $role = $_POST['role'];

 
$simpan=inputdata("INSERT INTO user (id,no_identitas,nama,status,username,password,role) VALUES ('$id','$no_ide','$nama','$status','$user','$pass','$role')");
if($simpan) {
header("location:data_user.php");
}
?>