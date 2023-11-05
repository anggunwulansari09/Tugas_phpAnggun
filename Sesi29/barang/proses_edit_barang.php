<?php
$id_barang = $_GET ['id_barang'];
$nama_barang = $_POST ['nama_barang'];
$harga = $_POST ['harga'];
$stok = $_POST ['stok'];
$id_kategori = $_POST ['id_kategori'];

include_once ("connection.php");

mysqli_query($connection, "UPDATE barang SET nama_barang = '$nama_barang',  harga = '$harga', 
stok= '$stok', id_kategori = '$id_kategori' WHERE id_barang = '$id_barang';");
header("Location:index.php");
