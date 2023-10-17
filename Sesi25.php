<?php

//tugas php pertama 
// Nomor 1
echo " menampilkan bilngan ganjil genap ";

$angka1 = 1;
$angka2 = 2;

if ($angka1 % 2 == 0) {
    echo $angka1 . " adalah bilangan genap";
} else {
    echo $angka1 . " adalah bilangan ganjil";
}

echo "<br>";

if ($angka2 % 2 == 0) {
    echo $angka2 . " adalah bilangan genap";
} else {
    echo $angka2 . " adalah bilangan ganjil";
}

//tugas 2
echo "<br>";
echo " menampilkan Tahun Kabisat ";

$tahun = 2024;

if ($tahun % 4 == 0) {
    if ($tahun % 100 == 0) {
        if ($tahun % 400 == 0) {
    echo $tahun . " adalah tahun kabisat.";
} else {
    echo $tahun . " bukan tahun kabisat.";
    }
} else {
    echo $tahun . " adalah tahun kabisat.";
    }
} else {
    echo $tahun . " bukan tahun kabisat.";
}

//tugas 3

?>