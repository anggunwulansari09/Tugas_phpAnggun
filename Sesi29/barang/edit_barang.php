<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Barang </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container {
            width: 800px;
            margin: auto;
        }
    </style>
</head>

<?php

include("connection.php");
$id_barang = $_GET['id_barang'];
$query = mysqli_query($connection, " SELECT * FROM barang WHERE id_barang= '$id_barang' ");

foreach ($query as $barang) {
    $nama_barang = $barang['nama_barang'];
    $harga = $barang['harga'];
    $stok = $barang['stok'];
    $id_kategori = $barang['id_kategori'];
}
?>

<body style="background-color: #8aa0db;">
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
                    <a class="nav-link active" aria-current="page" href="http://localhost/PHP/Sesi29/index.php" style="margin-left: 900px; font-family:Times New Roman; font-size: 20px;">Customer</a>
                    <a class="nav-link" href="http://localhost/PHP/Sesi29/barang/index.php" style="font-family:Times New Roman; font-size: 20px;">Barang</a>
                    <a class="nav-link" href="http://localhost/PHP/Sesi29/kategori/index.php" style="font-family:Times New Roman; font-size: 20px;">Kategori</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- barangs -->
    <form action="proses_edit_barang.php?id_barang=<?php echo $id_barang; ?>" method="post">
        <h4 style="margin-top: 50px;  text-align: center; margin-right: 137px;">Edit Data Barang</h4>
        <p style="text-align: center; ">Silahkan Untuk Melengkapi data yang benar</p>
        <table width="25%" align="center">
            <tr>
                <td>
                    Nama Barang
                </td>
                <td><input type="text" name="nama_barang" class="form-control" value="<?php echo $nama_barang; ?>" required=""></td>
            </tr>
            <tr>
            <tr>
                <td>
                    Harga Barang
                </td>
                <td><input type="number" name="harga" class="form-control" value="<?php echo $harga; ?>" required=""></td>
            </tr>
            <tr>
                <td>
                    Stok Barang
                </td>
                <td><input type="number" name="stok" class="form-control" value="<?php echo $stok; ?>"></td>
            </tr>
            <tr>
                <td>
                    ID Barang
                </td>
                <td><input type="number" name="id_kategori" class="form-control" value="<?php echo $id_kategori; ?>" required=""></td>
            </tr>
            <td></td>
            <td> <input type="submit" name="submit" value="submit" class="btn btn-primary btn-sm"></td>
            </tr>
        </table>
    </form>
</body>

</html>