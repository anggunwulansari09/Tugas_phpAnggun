<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Sesi 33</title>
</head>

<body>
    <?php
    // nomor 1
    echo "<hr><br> Tugas nomor 1 <br><br>";
    $Array = array("satu", "dua", "tiga", "empat", "lima");
    $angka = count($Array);

    for ($i = $angka - 1; $i >= 0; $i--) {
        echo $Array[$i] . "<br>";
    }

    // nomor 2
    echo "<hr><br> Tugas nomor 2 <br><br>";
    $array =  array("apel", "nanas", "mangga", "jeruk");
    $buah = count($array);

    echo "terdapat " . $buah . " " . "buah";

    // nomor 3
    echo "<hr><br>Tugas nomor 3 <br><br>";
    $Array = array(7, 3, 4, 9);
    $total= array_sum($Array);
    echo "Totalnya adalah: " . $total;

    // nomor 4
    echo "<hr><br> Tugas nomor 4 <br><br>";
    for ($i = 1; $i <= 10; $i++) {
        $hasil = 1 * $i;
        echo "1x" . $i . " = " . $hasil . "<br>";
    }
    ?>
</body>

</html>