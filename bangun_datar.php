<?php
//Tugas Operator
echo "<hr>";
echo ' Tugas Operator <br/>';
echo "<hr>";
echo "1. menghitung 5 macam luas jenis bangun datar <br/>";
echo "<br>";
//menghtung 5 luas bangun datar
//persegi
$panjang_sisi = 5;
$luas_persegi = $panjang_sisi * $panjang_sisi;
echo "Luas Persegi: " . $luas_persegi;

//persegi panjang
echo "<br>";
$panjang = 6;
$lebar = 4;
$luas_persegi_panjang = $panjang * $lebar;
echo "Luas Persegi Panjang: " . $luas_persegi_panjang;

//segitiga
echo "<br>";
$alas = 8;
$tinggi = 6;
$luas_segitiga = 0.5 * $alas * $tinggi;
echo "Luas Segitiga: " . $luas_segitiga;

//lingkaran
echo "<br>";
$jari_jari = 7;
$luas_lingkaran = 3.14 * $jari_jari * $jari_jari; // Pi x r x r
echo "Luas Lingkaran: " . $luas_lingkaran;

//trapesium
echo "<br>";
$alas1 = 5;
$alas2 = 9;
$tinggi_trapesium = 8;
$luas_trapesium = 0.5 * ($alas1 + $alas2) * $tinggi_trapesium;
echo "Luas Trapesium: " . $luas_trapesium;
