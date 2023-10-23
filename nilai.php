<?php
//Tugas Switchcase
echo "<hr>";
echo ' Tugas  Switch Case <br/>';
echo "<hr>";
//echo "grade";
echo ' Menampilkan kategori nilai : <br/>';

$nilai = 50;

switch (true) {
    case ($nilai >= 90 && $nilai <= 100):
        $Kategori = 'A';
        break;
    case ($nilai >= 80 && $nilai < 90):
        $Kategori = 'B';
        break;
    case ($nilai >= 70 && $nilai < 80):
        $Kategori = 'C';
        break;
    default:
        $Kategori = 'D';
}

echo "Kategori nilai Anda adalah: " . $Kategori;
