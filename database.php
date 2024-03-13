<?php
$servername = "localhost";
$database = "peminjaman";
$username = "root";
$password = "";
$koneksi = mysqli_connect($servername, $username, $password, $database);
if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
function tampildata($kueri)
{
    global $koneksi;
    $hasil = mysqli_query($koneksi, $kueri);
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)) {
        $rows[] = $row;
    }
    return $rows;
}

function inputdata($inputdata)
{
    global $koneksi;
    $sql = mysqli_query($koneksi, $inputdata);
    return $sql;
}

function listdata()
{
    global $koneksi;
    $hasil = mysqli_query($koneksi, "SELECT peminjaman.id, peminjaman.tgl_pinjam, peminjaman.tgl_kembali, peminjaman.no_identitas, peminjaman.kode_barang, peminjaman.jumlah, peminjaman.keperluan, peminjaman.status, peminjaman.id_login, user.username FROM peminjaman INNER JOIN user ON PEMINJAMAN.id_login = user.id;");
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)) {
        $rows[] = $row;
    }
    return $rows;
}

function cek_login($username,$password){
    global $koneksi; 
    $uname = $username; 
    $upass = $password;		
    $hasil = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$uname' AND password=md5('$upass')");
    $cek = mysqli_num_rows($hasil);
    if($cek > 0 ){
        $query = mysqli_fetch_array($hasil);
        $_SESSION['id'] = $query['id'];
        $_SESSION['username'] = $query['username'];
        $_SESSION['role'] = $query['role'];
        return true;		
    }
    else {
        return false;
    }	
}