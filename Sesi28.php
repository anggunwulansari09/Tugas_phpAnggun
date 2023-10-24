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
        <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Hasil</th>
        </tr>
        <?php
        $data = file_get_contents("data.json");
        $students = json_decode($data);

        $tahun_sekarang = 2021;

        foreach ($students as $key => $student) {
            $tanggal_lahir = $student->tanggal_lahir;
            $umur = $tahun_sekarang - substr($tanggal_lahir, 0, 4);

            if ($student->nilai >= 90 && $student->nilai <= 100) {
                $hasil = 'A';
            } elseif ($student->nilai >= 80 && $student->nilai < 90) {
                $hasil = 'B';
            } elseif ($student->nilai >= 70 && $student->nilai < 80) {
                $hasil = 'C';
            } else {
                $hasil = 'D';
            }
 
            // Mengatur warna latar belakang baris secara bergantian
            $color = ($key % 2 == 1) ? "white" : "#ddd";

            echo '<tr style="background-color:' . $color . '">';
            echo '<td>' . ($key + 1) . '</td>';
            echo '<td>' . $student->nama . '</td>';
            echo '<td>' . $student->tanggal_lahir . '</td>';
            echo '<td>' . $umur . '</td>';
            echo '<td>' . $student->alamat . '</td>';
            echo '<td>' . $student->kelas . '</td>';
            echo '<td>' . $student->nilai . '</td>';
            echo '<td>' . $hasil . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
        </div>
    </div>
</body>

</html>