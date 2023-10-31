<?php
include "connection.php";
$query = mysqli_query($connection, "SELECT * FROM barang");
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

        .card {
            height: 250px;
            box-shadow: 0px 0px 10px 2px #9ea6a7;
            width: 32rem;
            padding-left: 2px;
            padding-right: 2px;
            margin-top: 100px;
            margin-left: 400px;
        }
    </style>
</head>

<body>
    </nav>
    <!-- As a heading navbar -->
    <nav class="navbar navbar-light" style="background-color: #03ffd9; height: 50px;">
        <img src="penjualan.png" alt="Logo" width="50" height="30" style="padding-top: 10px; padding-left: 10px; ">
    </nav>
    <h2 style="text-align: center; font-family:'Times New Roman';"><u><br> Menyambungkan file ke database</u> </h2><br>

    <p style="padding-left: 180px;"><b><i>Tabel Barang</i></b></p>
    <li style="padding-left: 180px;">
        <a href="tambah_barang.php">Tambah Data Barang</a>
    </li>
    <center>
        <li>
            Klik disini untuk menampilkan tabel<a href="kategori/index.php"> Kategori</a>
        </li>
    </center>
    <table align="center" style="width: 1000px;" table class="table table-striped-columns">
        <tr>
            <td width="200px" style="background-color: #03ffd9; text-align: center;"> <b><i>ID Barang</i></b></td>
            <td width="200px" style="background-color: #03ffd9; text-align: center;"> <b><i>Nama Barang</i></b></td>
            <td width="200px" style="background-color: #03ffd9; text-align: center;"> <b><i>Harga</i></b></td>
            <td width="200px" style="background-color: #03ffd9; text-align: center;"> <b><i>Stok</i></b></td>
            <td width="200px" style="background-color: #03ffd9; text-align: center;"> <b><i>ID Kategori</i></b></td>
        </tr>
        <?php if (mysqli_num_rows($query)) {
        ?>
            <?php
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td style="background-color: #9ea6a7; text-align: center;"><?php echo $data['id_barang']; ?></td>
                    <td style="background-color: #9ea6a7;"><?php echo $data['nama_barang']; ?></td>
                    <td style="background-color: #9ea6a7; text-align: center;"><?php echo "Rp" . number_format($data['harga']); ?></td>
                    <td style="background-color: #9ea6a7; text-align: center;"><?php echo $data['stok']; ?></td>
                    <td style="background-color: #9ea6a7; text-align: center;"><?php echo $data['id_kategori']; ?></td>
                </tr>
            <?php
            } ?>
        <?php } ?>
    </table>
    <p style="font-family:'Times New Roman'; text-align: center; margin-top: 10px;"><b><i>~ finish ~</i></b></p>
</body>

</html>