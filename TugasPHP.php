<?php
//Tugas PHP
echo "<hr>";
echo ' Tugas PHP <br/>';
echo "<hr>";

//nomor 1 perkalian
echo "1. meembuat tampilan perkalian menggunaan looping <br/>";
echo "<br>";
$n = 10; // Jumlah perkalian 

for ($i = 1; $i <= 10; $i++) {
    $hasil = 1*$i ;
    echo "1x $i = $hasil<br>";
}

//nomor 2 bintang kebawah
echo "<br>";
echo "2. meembuat tampilan bintang segitiga  ke bawah menggunakan looping <br/>";
echo "<br>";
$n = 9; // Jumlah baris (tinggi segitiga)
for ($i = $n; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

//nomor 3 segitiga nomor
echo "<br>";
echo "3. meembuat tampilan segitiga nomor ke bawah menggunakan looping <br/>";
echo "<br>";
$tinggiSegitiga = 8; // Ganti dengan tinggi segitiga yang Anda inginkan

for ($baris = 0; $baris <= $tinggiSegitiga; $baris++) {
    for ($kolom = 0; $kolom <= $baris; $kolom++) {
        echo $kolom . " ";
    }
    echo "<br>"; // Pindah ke baris berikutnya setelah setiap baris selesai
}

