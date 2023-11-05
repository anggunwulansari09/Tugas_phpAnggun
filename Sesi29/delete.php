<?php

include ("connection.php");

$id_customer = $_GET ['id_customer'];

mysqli_query($connection, "DELETE FROM customer WHERE  id_customer='$id_customer' ");

header("Location:index.php");

