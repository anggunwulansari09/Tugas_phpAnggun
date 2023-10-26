<?php
include "connection.php";
$query = mysqli_query($connection, "SELECT * FROM customer");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas menyambungkan database</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .container {
            width: 800px;
            margin: auto;
        }

        .card {
            height: 260px;
            box-shadow: 0px 0px 10px 2px #9ea6a7;
            width: 32rem;
            padding-left: 2px;
            padding-right: 2px;
            margin-top: 100px;
            margin-left: 400px;
        }
    </style>
</head>

<body>
    </nav>
    <!-- As a heading navbar -->
    <nav class="navbar navbar-light" style="background-color: #5085c7; height: 50px;">
    </nav>
    <h2 style="text-align: center; font-family:'Times New Roman';"><u> Menyambungkan file ke database</u> </h2>
    <div class="card" style="border-radius: 0px;">
        <div class=" card-body">
            <table border="1" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="100px" style="background-color: #5085c7;"> <b><i>ID Customer</i></b></td>
                    <td width="400px" style="background-color: #5085c7;"> <b><i>Nama Customer</i></b></td>
                    <td width="500px" style="background-color: #5085c7;"> <b><i>Alamat Customer</i></b></td>
                    <td width="100px" style="background-color: #5085c7;"> <b><i>Telpon Customer</i></b></td>
                    <td width="100px" style="background-color: #5085c7;"> <b><i>Username Customer</i></b></td>
                </tr>
                <?php if (mysqli_num_rows($query)) {
                ?>
                    <?php
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td style="background-color: #9ea6a7;"><?php echo $data['id_customer']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $data['nama_customer']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $data['alamat_customer']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $data['telp_customer']; ?></td>
                            <td style="background-color: #9ea6a7;"><?php echo $data['username_customer']; ?></td>
                        </tr>
                    <?php
                    } ?>
                <?php } ?>
                
            </table>
            <p style="font-family:'Times New Roman'; text-align: center; margin-top: 30px;"><b><i>~ finish ~</i></b></p>
        </div>
    </div>
</body>

</html>