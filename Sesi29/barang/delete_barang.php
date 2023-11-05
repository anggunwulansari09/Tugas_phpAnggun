<?php

include ("connection.php");

$id_barang = $_GET ['id_barang'];

mysqli_query($connection, "DELETE FROM barang WHERE  id_barang ='$id_barang' ");

header("Location:index.php");

