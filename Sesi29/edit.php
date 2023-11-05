<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<?php

include("connection.php");
$id_customer = $_GET['id_customer'];
$customers = mysqli_query($connection, " SELECT * FROM customer WHERE id_customer = '$id_customer'");

foreach ($customers as $customer) {
    $nama_customer = $customer['nama_customer'];
    $alamat_customer = $customer['alamat_customer'];
    $telp_customer = $customer['telp_customer'];
    $username_customer = $customer['username_customer'];
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
    <form action="proses_edit_customer.php?id_customer=<?php echo $id_customer; ?>" method="post">
        <h4 style="margin-top: 50px;  text-align: center; margin-right: 115px;">Edit Data Customer</h4>
        <p style="text-align: center; ">Silahkan Untuk Melengkapi data yang benar</p>
        <table width="25%" align="center">
            <tr>
                <td>
                    Nama
                </td>
                <td><input type="text" class="form-control" name="nama_customer" value="<?php echo $nama_customer; ?>"></td>
            </tr>
            <tr>
                <td>
                    Alamat
                </td>
                <td> <textarea class="form-control" name="alamat_customer" id="" rows="10"><?php echo $alamat_customer; ?>"</textarea></td>
            </tr>
            <tr>
                <td>
                    Telpon
                </td>
                <td><input type="number" name="telp_customer" class="form-control" value="<?php echo $telp_customer; ?>"></td>
            </tr>
            <tr>
                <td>
                    Username
                </td>
                <td><input type="text" name="username_customer" class="form-control" value="<?php echo $username_customer; ?>"></td>
            </tr>
            <td></td>
            <td> <input type="submit" name="submit" value="submit" class="btn btn-primary btn-sm"></td>
            </tr>
        </table>
    </form>
</body>

</html>