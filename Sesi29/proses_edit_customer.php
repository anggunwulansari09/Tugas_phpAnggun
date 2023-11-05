<?php
$id_customer = $_GET ['id_customer'];
$nama_customer = $_POST ['nama_customer'];
$alamat_customer = $_POST ['alamat_customer'];
$telp_customer = $_POST ['telp_customer'];
$username_customer = $_POST ['username_customer'];

include_once("connection.php");

mysqli_query($connection, "UPDATE customer SET nama_customer = '$nama_customer',  alamat_customer = '$alamat_customer', 
telp_customer = '$telp_customer', username_customer = '$username_customer' WHERE id_customer = '$id_customer';");
header("Location:index.php");
