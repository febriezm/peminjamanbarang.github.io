<?php

include("database.php");
 

if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    $kode = $_POST['kode_brg'];
    $nama = $_POST['nama_brg'];
    $kategori = $_POST['kategori'];
    $merk = $_POST['merk'];
    $jml = $_POST['jumlah'];
   
    $result = mysqli_query($koneksi, "UPDATE barang SET id='$id',kode_brg='$kode',nama_brg='$nama',kategori='$kategori',merk='$merk',jumlah='$jml' WHERE id=$id");
    
    header("Location: data.php");
}
?>
<?php

$kode = $_GET['kode'];
 

$result = mysqli_query($koneksi, "SELECT * FROM barang WHERE id=$kode");
 
while($user_data = mysqli_fetch_array($result))
{
    $id = $user_data['id'];
    $kode = $user_data['kode_brg'];
    $nama = $user_data['nama_brg'];
    $kategori = $user_data['kategori'];
    $merk = $user_data['merk'];
    $jml = $user_data['jumlah'];
}
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

    <title>Update Data Here!</title>
</head>

<body>

    <div class="jumbotron">
        <h1>Edit Data</h1>
        <form name="update_data" action="" method="post">
            <div class="form-group">
                <label for="barang">ID</label>
                <input type="text" class="form-control" name="id" value=<?php echo $id;?>>
                <label for="barang">Kode Barang</label>
                <input type="text" class="form-control" name="kode_brg" value=<?php echo $kode;?>>
                <label for="barang">Nama Barang</label>
                <input type="text" class="form-control" name="nama_brg" value=<?php echo $nama;?>>
                <label for="barang">Kategori</label>
                <input type="text" class="form-control" name="kategori" value=<?php echo $kategori;?>>
                <label for="barang">Merk</label>
                <input type="text" class="form-control" name="merk" value=<?php echo $merk;?>>
                <label for="barang">Jumlah</label>
                <input type="text" class="form-control" name="jumlah" value=<?php echo $jml;?>>
            </div>
            <td><input type="hidden" name="id" value=<?php echo $_GET['kode'];?>></td>
            <a class="font-weight-bold btn btn-secondary" href="data.php" role="button">Back</a>
            <input type="submit" value="Update" name="update" class="font-weight-bold btn btn-primary">
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