<?php
echo "<hr>";
echo ' Tugas Operator <br/>';
echo "<hr>";
echo "<br>";
echo "2. menghitung 3 volume bangun ruang <br/>";

//enghitung 3 volume bangun ruang
//kubus
echo "<br>";
$sisi = 4; // Panjang sisi kubus
$volume_kubus = $sisi * $sisi * $sisi;
echo "Volume Kubus: " . $volume_kubus;

//balok
echo "<br>";
$panjang = 6;
$lebar = 4;
$tinggi = 5;
$volume_balok = $panjang * $lebar * $tinggi;
echo "Volume Balok: " . $volume_balok;

//bola
echo "<br>";
$jari_jari = 7; // Jari-jari bola
$volume_bola = (4 / 3) * 3.14 * $jari_jari * $jari_jari * $jari_jari; // (4/3) * Pi * r^3
echo "Volume Bola: " . $volume_bola;
