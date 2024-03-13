<?php
require_once('database.php');
$data = tampildata("Select * from barang");
$id = 0;
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Admin</title>
</head>

<style>

   navbar {
    background-image: url('https://i.pinimg.com/564x/23/c0/07/23c0072546b6ad8431cd2698c51b8fd0.jpg');
  background-repeat: no-repeat; 
  background-size: cover;
  }

</style>

<body>

<navbar class="navbar navbar-expand-lg bg-body-tertiary bg-info text-dark">
<img src="img/a.png" style="width:50px;">
      <a class="navbar-brand font-weight-bold font-italic text-light" href="#">AGUNA ROOM</a>
    </navbar>

    <div class="jumbotron-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Welcome To Site</span>
            </h6>
                <a class="nav-link active" href="dashboard.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="data.php">
                  <span data-feather="file-text"></span>
                  Data Barang
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="peminjaman.php">
                  <span data-feather="clipboard"></span>
                  Peminjaman
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="data_user.php">
                  <span data-feather="users"></span>
                  Data User
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">
                  <span data-feather="log-out"></span>
                  Log Out
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Contact</span>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/febriezm_/">
                    <span data-feather="instagram"></span>
                    Instagram
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.facebook.com/profile.php?id=100010023106891">
                <span data-feather="facebook"></span>
                Facebook
              </a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="https://github.com/febriezm">
                  <span data-feather="github"></span>
                  Github
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="mail"></span>
                  Mail
                </a>
              </li>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="font-weight-bold">Data Barang</h1>
          </div>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

<div class="container-fluid jumbotron">
        <table class="text-center table grid table-light">
            <thead class="thead-dark">
                <tr class="font-weight-bold">
                    <th scope="col-">ID</th>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Jumlah</th>
                    
                    <!-- Button trigger modal -->
                    <th> <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#exampleModalCenter">
                            Add Data
                        </button> </th>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Add Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="jumbotron">
                                        <h1>Add Data</h1><hr>
                                        <form action="proses_input.php" method="POST">
                                            <div class="form-group">
                                                <label for="barang">ID</label>
                                                <input type="text" class="form-control" name="id">
                                                <label for="barang">Kode Barang</label>
                                                <input type="text" class="form-control" name="kode_brg">
                                                <label for="barang">Nama Barang</label>
                                                <input type="text" class="form-control" name="nama_brg">
                                                <label for="barang">Kategori</label>
                                                <input type="text" class="form-control" name="kategori">
                                                <label for="barang">Merk</label>
                                                <input type="text" class="form-control" name="merk">
                                                <label for="barang">Jumlah</label>
                                                <input type="text" class="form-control" name="jumlah">
                                            </div>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input type="submit" value="Save"
                                                class="font-weight-bold btn btn-primary"></input>
                                        </form>
                                    </div>
                                </div>
                            </div>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $room): ?>
                    <tr>
                        <th scope="row">
                            <?php echo "$room[id]"; ?>
                        </th>
                        <td>
                            <?php echo "$room[kode_brg]"; ?>
                        </td>
                        <td>
                            <?php echo "$room[nama_brg]"; ?>
                        </td>
                        <td>
                            <?php echo "$room[kategori]"; ?>
                        </td>
                        <td>
                            <?php echo "$room[merk]"; ?>
                        </td>
                        <td>
                            <?php echo "$room[jumlah]"; ?>
                        </td>
                        <td>
                            <?php echo "<a href= 'edit.php?kode=$room[id]'>Edit</a> | <a href= 'delete.php?kode=$room[id]'>Delete</a>"; ?>
                        </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>  
        </main>
    </div>
</div>

<br>

<footer>
    <!-- Copyright -->
  <div class="text-center p-5" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <a class="text-reset fw-bold" href="https://github.com/febriezm/">febriezaenimuchtar.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

</body>

</html>