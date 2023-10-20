<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktek Individu</title>
</head>

<body>
    <?php
    //praktek individu ke 1 
    //nomor kebawah
    echo "<hr>";
    echo "1. membuat tampilan segitiga nomor ke bawah  <br/>";
    echo "<hr>";
    echo "<br>";
    $tinggiSegitiga = 8;

    for ($baris = 0; $baris <= $tinggiSegitiga; $baris++) {
        for ($kolom = 0; $kolom <= $baris; $kolom++) {
            echo $kolom . " ";
        }
        echo "<br>";
    }

    echo "<hr>";
    echo "2. membuat tampilan Tabel  <br/>";
    echo "<hr>";
    echo "<br>";
    ?>
    <!-- Praktek Individu ke 2-->
    <table border="1">
        <tr style="background-color: blue;">
            <td>No</td>
            <td>Nama</td>
            <td>Kelas</td>
        </tr>
        <?php
        for ($i = 1, $j = 10; $i < 11, $j >= 1; $i++, $j--) {
            $baris = ($i % 2 == 0) ? 'baris-genap' : 'baris-ganjil';

            echo '<tr class="' . $baris . '">';
            echo "
            <tr >
                <td>$i</td>
                <td>Nama ke $i</td>
                <td>Kelas $j</td>
            </tr>";
        }

        ?>
    </table>
</body>

</html>