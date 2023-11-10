<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data Barang </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        function validateForm() {
            var nama_barang = document.forms["tambahbarangForm"]["nama_barang"].value;
            var harga = document.forms["tambahbarangForm"]["harga"].value;
            var stok = document.forms["tambahbarangForm"]["stok"].value;
            var id_kategori= document.forms["tambahbarangForm"]["id_kategori"].value;

            if (nama_barang == "" || harga == "" || stok == "" || id_kategori == "") {
                alert("Semua field harus di isi !"); //pop up data yang harus diisi
                return false;
            }
        }
    </script>
</head>

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
                    <a class="nav-link active" aria-current="page" href="http://localhost/Tugas_php/Sesi29/index.php" style="margin-left: 900px; font-family:Times New Roman; font-size: 20px;">Customer</a>
                    <a class="nav-link" href="http://localhost/Tugas_php/Sesi29/barang/index.php" style="font-family:Times New Roman; font-size: 20px;">Barang</a>
                    <a class="nav-link" href="http://localhost/Tugas_php/Sesi29/kategori/index.php" style="font-family:Times New Roman; font-size: 20px;">Kategori</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- tabel -->
    <form name="tambahbarangForm" action="proses_barang.php?id_barang=<?php echo $id_barang; ?>" method="post" onsubmit="return validateForm();">
        <h4 style="margin-top: 50px;  text-align: center; margin-right: 115px;">Tambah Data Barang</h4>
        <p style="text-align: center; ">Silahkan lengkapi data untuk menambahkannya </p>
        <table width="25%" align="center">
            <tr>
                <td>
                    Nama Barang
                </td>
                <td><input type="text" name="nama_barang" class="form-control" ></td>
            </tr>
            <tr>
                <td>
                    Harga
                </td>
                <td><input type="number" name="harga" class="form-control" ></td>
            </tr>
            <tr>
                <td>
                    Stok
                </td>
                <td><input type="number" name="stok" class="form-control"></td>
            </tr>
            <tr>
                <td>
                    ID Barang
                </td>
                <td><input type="number" name="id_kategori" class="form-control" ></td>
            </tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit" class="btn btn-primary btn-sm"></td>
            </tr>
        </table>
    </form>
</body>

</html>