<?php

$nama_customer = $_POST ['nama_customer'];
$alamat_customer = $_POST ['alamat_customer'];
$telp_customer = $_POST ['telp_customer'];
$username_customer = $_POST ['username_customer'];

include_once("connection.php");

$result = mysqli_query($connection, "INSERT INTO `customer` (`nama_customer`,`alamat_customer`,`telp_customer`,`username_customer`)
 VALUES ('$nama_customer','$alamat_customer','$telp_customer','$username_customer');");
header("Location:index.php");
