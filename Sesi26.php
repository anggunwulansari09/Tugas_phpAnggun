<?php
//Tugas sesi 26 PHP LOOPING
//nomor 1
//menampilkan angka ganjil dan genap
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "Angka $i adalah bilangan genap<br>";
    } else {
        echo "Angka $i adalah bilangan ganjil<br>";
    }
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
