<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Studi Kasus Selasat</title>
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
            padding-bottom: 90px;
            margin-top: 100px;
            margin-left: 400px;
        }
    </style>
</head>

<body>
    </nav>
    <!-- As a heading navbar -->
    <nav class="navbar navbar-light" style="background-color: rgb(255, 134, 21); height: 50px;">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">
                <h3>Daftar Nilai</h3>
            </span>
        </div>
    </nav>
    <div class="card" style="border-radius: 0px;">
        <div class=" card-body">
            <table class="table table-striped table-hover" border="1" align="center">
                <!-- <tr style="background-color:#00c0ef;">
                    <td>No</td>
                    <td>Nama</td>
                    <td>tanggal_lahir</td>
                    <td>umur</td>
                    <td>Alamat</td>
                    <td>kelas</td>
                    <td>nilai</td>
                    <td>Hasil</td>
                </tr> -->
                <tbody>
                    <?php
                    // Data yang akan ditampilkan dalam tabel
                    $data = file_get_contents("data.json");
                    $students = json_decode($data);
                    $student = array(
                        array("No", "Nama", "Tanggal lahir", "Umur", "Alamat", "Kelas", "Nilai", "Hasil"),
                    );
                    $nilai = "";

                    switch (true) {
                        case ($nilai >= 90 && $nilai <= 100):
                            $hasil = 'A';
                            break;
                        case ($nilai >= 80 && $nilai < 90):
                            $hasil = 'B';
                            break;
                        case ($nilai >= 70 && $nilai < 80):
                            $hasil = 'C';
                            break;
                        default:
                            $hasil = 'D';
                    }
                    echo "hasil " . $hasil;

                    // Membuka elemen <table> dan baris pertama (header)
                    echo "<table border='1' class='center-table'>";
                    
                    // Mengisi baris pertama dengan data array pertama
                    foreach ($student[0] as $header) {
                        echo "<th style='background-color: #2b85ed; width: 100px; text-align: center;'>$header</th>";
                    }

                    echo "</tr>";

                    // Mengisi baris berikutnya dengan data dari array dengan looping for
                    for ($i = 0; $i < count($students); $i++) {
                        echo "<tr>";
                        foreach ($students[$i] as $key => $value) {
                            if ($i % 2 == 0) {
                                echo "<td style='background-color: ##ebf6fa;'>$value</td>"; //warna abu"
                            } else {
                                echo "<td style='background-color: #f2f2f2;'>$value</td>";
                            }
                        }
                        echo "</tr>";
                    }
                    // Menutup elemen <table>
                    echo "</table>";
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>