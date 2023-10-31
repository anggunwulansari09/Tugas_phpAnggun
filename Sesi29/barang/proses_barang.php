<?php

$nama_barang = $_POST ['nama_barang'];
$harga = $_POST ['harga'];
$stok = $_POST ['stok'];
$id_kategori = $_POST ['id_kategori'];

include_once("connection.php");

$result = mysqli_query($connection, "INSERT INTO `barang` (`nama_barang`,`harga`,`stok`,`id_kategori`)
 VALUES ('$nama_barang','$harga','$stok','$id_kategori');");
header("Location:index.php");
