<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data customer </title>
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
$id_kategori = $_GET['id_kategori'];
$kategoris = mysqli_query($connection, " SELECT * FROM kategori WHERE id_kategori = '$id_kategori'");

foreach ($kategoris as $kategori) {
    $id_kategori = $kategori['id_kategori'];
    $nama_kategori = $kategori['nama_kategori'];
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
    <!-- tabel -->
    <form action="proses_edit_kategori.php?id_kategori=<?php echo $id_kategori; ?>" method="post">
        <h4 style="margin-top: 50px;  text-align: center; margin-right: 115px;">Edit Data Kategori</h4>
        <p style="text-align: center; ">Silahkan Untuk Melengkapi data yang benar</p>
        <table width="25%" align="center">
            <tr>
                <td>
                    Nama Kategori
                </td>
                <td><input type="text" class="form-control" name="nama_kategori" value="<?php echo $nama_kategori; ?>"></td>
            </tr>

            <td></td>
            <td> <input type="submit" name="submit" value="submit" class="btn btn-primary btn-sm"></td>
        </table>
    </form>
</body>

</html>