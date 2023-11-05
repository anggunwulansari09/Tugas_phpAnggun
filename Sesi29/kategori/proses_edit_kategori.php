<?php

$id_kategori = $_GET ['id_kategori'];
$nama_kategori = $_POST ['nama_kategori'];


include_once("connection.php");

mysqli_query($connection, "UPDATE kategori SET nama_kategori= '$nama_kategori' WHERE id_kategori = '$id_kategori';");
header("Location:index.php");
