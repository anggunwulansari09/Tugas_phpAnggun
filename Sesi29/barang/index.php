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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <style>
        .container {
            width: 800px;
            margin: auto;
        }
    </style>
    <!-- javascript -->
    <script>
        function confirmDelete(id) {
            if (confirm("Apakah kamu yakin ingin Menghapusnya?")) { // pop up  peringatan data yang akan dihapus
                window.location.href = "delete_barang.php?id_barang=" + id;
            }
        }
    </script>
    <!-- jquerry -->
    <script>
        $(document).ready(function() {
            $('#table-barang').DataTable();
        });
    </script>
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
    <p style="padding-left: 170px; color: white;"><b><i><br>Tabel Barang</i></b></p>
    <!-- button tambah -->
    <p style="padding-left: 170px;">
        <a class="btn btn-primary btn-sm" href="tambah_barang.php" role="button">Tambah Data</a>
    </p>
    <!-- halaman kategori -->
    <center>
        <li style="color: skyblue;">
            Klik disini untuk menampilkan tabel<a href="kategori/index.php"> Kategori</a>
        </li>
    </center>
    <!-- tabel barang -->
    <div style="width:1000px; margin:0 auto;">
        <table id="table-barang" class="table table-striped-columns">
            <thead>
                <tr>
                    <td width="200px" style="background-color: #03ffd9; text-align: center;"> <b><i>ID Barang</i></b></td>
                    <td width="200px" style="background-color: #03ffd9; text-align: center;"> <b><i>Nama Barang</i></b></td>
                    <td width="200px" style="background-color: #03ffd9; text-align: center;"> <b><i>Harga</i></b></td>
                    <td width="200px" style="background-color: #03ffd9; text-align: center;"> <b><i>Stok</i></b></td>
                    <td width="200px" style="background-color: #03ffd9; text-align: center;"> <b><i>ID Kategori</i></b></td>
                    <td width="200px" style="background-color: #03ffd9; text-align: center;"> <b><i>Aksi</i></b></td>
                </tr>
            </thead>
            <tbody>
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
                            <td align="center">o
                                <a href="edit_barang.php?id_barang=<?php echo $data['id_barang']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="javascript:void(0);" onclick="confirmDelete(<?php echo $data['id_barang']; ?>);" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php
                    } ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- button kembali -->
    <p style="padding-left: 1110px;">
        <a class="btn btn-dark btn-sm" href="http://localhost/Tugas_php/Sesi29/index.php" role="button">Kembali</a>
    </p>
    <!-- footer -->
    <footer>
        <div class="text-center p-4" style="background-color: #121724; height: 20px;">
            <p style="color: white;">© 2021 Copyright: anggun wulan sari <br></p>
        </div>
    </footer>
</body>

</html>