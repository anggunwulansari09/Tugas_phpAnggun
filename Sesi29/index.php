<?php
include "connection.php";
$query = mysqli_query($connection, "SELECT * FROM Customer");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas menyambungkan database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container {
            width: 800px;
            margin: auto;
        }
    </style>
</head>

<body style="background-color: #374766;">

    <!-- navbar dan menu -->
    <nav class="navbar navbar-expand-lg bg-body-#ffd903;" style="background-color: #ffd903; height: 50px;">
        <div class="container-fluid">
            <img src="penjualan.png" alt="Logo" width="70" height="40" style="padding-top: 2px; ">
            <a class="navbar-brand" href="#" style="margin-left: 10px; font-family:Times New Roman;font-size: 25px;">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="http://localhost/Tugas_php/Sesi29/index.php" style="margin-left: 900px; font-family:Times New Roman; font-size: 20px;">Customer</a>
                    <a class="nav-link" href="http://localhost/Tugas_php/Sesi29/barang/index.php" style="font-family:Times New Roman; font-size: 20px;">Barang</a>
                    <a class="nav-link" href="http://localhost/Tugas_php/Sesi29/kategori/index.php" style="font-family:Times New Roman; font-size: 20px;">Kategori</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <h2 style="text-align: center; font-family:'Times New Roman'; color: white; "><u> <br>Toko Sembako Murah</u> </h2>
    <p style="text-align: center; color: skyblue;">Selamat Datang Di Toko Sembako Murah</p>
    <p style="padding-left: 170px; color: white;"><b><i><br>Tabel customer</i></b></p>
    <!-- button tambah -->
    <p style="padding-left: 170px;">
        <a class="btn btn-primary btn-sm" href="tambah.php" role="button">Tambah Data </a>
    </p>
    <!-- tabel customer -->
    <table align="center" style="width: 1000px;" class="table table-striped-columns">
        <tr>
            <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>ID Customer</i></b></td>
            <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>Nama Customer</i></b></td>
            <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>Alamat Customer</i></b></td>
            <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>Telpon Customer</i></b></td>
            <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>Username Customer <br></i></b></td>
            <td width="200px" style="background-color: #5085c7; text-align: center;"> <b><i>Aksi <br></i></b></td>
        </tr>
        <?php if (mysqli_num_rows($query)) {
        ?>
            <?php
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td style="background-color: #9ea6a7; text-align: center;"><?php echo $data['id_customer']; ?></td>
                    <td style="background-color: #9ea6a7;"><?php echo $data['nama_customer']; ?></td>
                    <td style="background-color: #9ea6a7;"><?php echo $data['alamat_customer']; ?></td>
                    <td style="background-color: #9ea6a7; text-align: center;"><?php echo $data['telp_customer']; ?></td>
                    <td style="background-color: #9ea6a7;"><?php echo $data['username_customer']; ?></td>
                    <td align="center">
                        <a href="edit.php?id_customer=<?php echo $data['id_customer']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id_customer=<?php echo $data['id_customer']; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php
            } ?>
        <?php } ?>
    </table>
    <!-- table menu -->
    <table align="center" style="background-color: white;">
        <p style="text-align: center; color: skyblue;">Untuk input data barang dan kategori bisa melalui link ini atau menu di navbar</p>
        <tr>
            <td>
                <a href="index.php">Customer |</a>
            </td>
            <td>
                <a href="barang\index.php">Barang |</a>
            </td>
            <td>
                <a href="kategori\index.php">Kategori</a>
            </td>
        </tr>
        </div>
    </table>
    <p><br></p>
    <!-- footer -->
    <footer>
        <div class="text-center p-4" style="background-color: #121724; height: 20px;">
            <p style="color: white;">© 2021 Copyright: anggun wulan sari <br></p>
        </div>
    </footer>
</body>

</html>