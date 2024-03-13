<?php
require_once('database.php');
session_start(); // memulai session
$_SESSION['status'] = ""; 
if ($_SESSION['status']=="login") { // cek session jika sudah login lanjutkan ke index.php 
    header("location:dashboard.php");
}else{ // jika status belum login tampilkan ke form login 
    if (isset($_POST['masuk'])) {  // jika tombol submit ditekan 
        $username = $_POST['username'];
        if (cek_login($_POST['username'], $_POST['password'])) {
            $_SESSION['username'] = $username; // masukan session username
            $_SESSION['status'] = "login"; // masukan session status login
            if ($_SESSION['role']=="Admin") {  // jika role admin
                header("location:dashboard.php"); // arahkan ke halaman index
            }else{        
                header("location:member.php"); // arahkan ke halaman member
            }
        } else {
            header("location:login.php?msg=gagal"); // jika gagal login arahkan ke halaman login
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    body {
  margin: auto;
  width: 50%;
  padding: 100px;
  background-image: url('https://i.pinimg.com/564x/23/c0/07/23c0072546b6ad8431cd2698c51b8fd0.jpg');
  background-repeat: no-repeat; 
  background-size: cover;
}

  form {
    background-image: url('');
  }
</style>
<body>

<div class="jumbotron border p-auto m-5">
<form action="" method="POST">
    <h1 class="font-weight-bold">Log In Here!</h1><hr>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Username" name="username">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" placeholder="Password" name="password">
  </div>
  <div class="form-group custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
       <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
   </div>
  <input type="submit" name="masuk" value="Login" class="btn btn-primary form-control"></input>
  
</form>
</div>

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

</body>
</html>