<?php
//Tugas sesi 26 PHP LOOPING
//nomor 1
//menampilkan angka ganjil dan genap
$angka1 = 1;
$angka2 = 2;
$angka3 = 3;
$angka4 = 4;
$angka5 = 5;
$angka6 = 6;
$angka7 = 7;
$angka8 = 8;
$angka9 = 9;

if ($angka1 % 2 == 0) {
    echo $angka1 . " adalah bilangan genap.";
} else {
    echo $angka1 . " adalah bilangan ganjil.";
}

echo "<br>";

if ($angka2 % 2 == 0) {
    echo $angka2 . " adalah bilangan genap.";
} else {
    echo $angka2 . " adalah bilangan ganjil.";
}

echo "<br>";

if ($angka3 % 2 == 0) {
    echo $angka3 . " adalah bilangan genap.";
} else {
    echo $angka3 . " adalah bilangan ganjil.";
}
echo "<br>";

if ($angka4 % 2 == 0) {
    echo $angka4 . " adalah bilangan genap.";
} else {
    echo $angka4 . " adalah bilangan ganjil.";
}
echo "<br>";

if ($angka5 % 2 == 0) {
    echo $angka5 . " adalah bilangan genap.";
} else {
    echo $angka5 . " adalah bilangan ganjil.";
}
echo "<br>";

if ($angka6 % 2 == 0) {
    echo $angka6 . " adalah bilangan genap.";
} else {
    echo $angka6 . " adalah bilangan ganjil.";
}
echo "<br>";

if ($angka7 % 2 == 0) {
    echo $angka7 . " adalah bilangan genap.";
} else {
    echo $angka7 . " adalah bilangan ganjil.";
}
echo "<br>";

if ($angka8 % 2 == 0) {
    echo $angka8 . " adalah bilangan genap.";
} else {
    echo $angka8 . " adalah bilangan ganjil.";
}
echo "<br>";

if ($angka9 % 2 == 0) {
    echo $angka9 . " adalah bilangan genap.";
} else {
    echo $angka9 . " adalah bilangan ganjil.";
}

//nomor 2
//menampilkan tahun kabisat
echo "<br>";
echo "<hr>";
$mulaiTahun = 2000; // Tahun awal
$akhirTahun = 2023; // Tahun akhir

for ($tahun = $mulaiTahun; $tahun <= $akhirTahun; $tahun += 4) {
    echo $tahun . " adalah tahun kabisat.<br>";
}

//nomor 3
//nomor kebawah
echo "<br>";
echo "<hr>";
for ($baris = 9; $baris >= 1; $baris--) {
    for ($kolom = 1; $kolom <= $baris; $kolom++) {
        echo $kolom . " ";
    }
    echo "<br>";
}
