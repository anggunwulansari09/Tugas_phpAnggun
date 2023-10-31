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

        .card {
            height: 340px;
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
    <nav class="navbar navbar-light" style="background-color: #5085c7; height: 50px;">
        <img src="penjualan.png" alt="Logo" width="50" height="30" style="padding-top: 10px; padding-left: 10px; ">
    </nav>
    <!-- isinya -->
    <h2 style="text-align: center; font-family:'Times New Roman';"><u> Menyambungkan file ke database</u> </h2>
    <div class="col-md-12 text center mb-5 mt-5" style="text-align: center;">
        <a href="index.php">Customer |</a>
        <a href="barang\index.php">Barang |</a>
        <a href="kategori\index.php">Kategori</a>
    </div>
    
    <p style="text-align: center;">Berikut beberapa tabel database pada penjualan barang online</p>


    <p style="padding-left: 180px;"><b>Tabel Customer</b></p>
    <li style="padding-left: 180px;">
        <a href="tambah.php">Tambah Data Customer</a>
    </li>

    <table align="center" style="width: 1000px;" class="table table-striped-columns">
        <tr>
            <td width="200px" style="background-color: #5085c7;"> <b><i>ID Customer</i></b></td>
            <td width="200px" style="background-color: #5085c7;"> <b><i>Nama Customer</i></b></td>
            <td width="200px" style="background-color: #5085c7;"> <b><i>Alamat Customer</i></b></td>
            <td width="200px" style="background-color: #5085c7; "> <b><i>Telpon Customer</i></b></td>
            <td width="200px" style="background-color: #5085c7;"> <b><i>Username Customer <br></i></b></td>
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
                </tr>
            <?php
            } ?>
        <?php } ?>
    </table>

</body>

</html>