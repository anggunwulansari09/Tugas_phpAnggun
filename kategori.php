<?php
//Tugas IF-Else
echo "<hr>";
echo ' Tugas  IF-Else <br/>';
echo "<hr>";
// Mengisi variabel
$nama = "Anggun";
$tinggi = 160; // dalam centimeter
$berat = 49; // dalam kilogram

// Menghitung BMI
$tinggi_meter = $tinggi / 100; // Mengonversi tinggi ke meter
$bmi = $berat / ($tinggi_meter * $tinggi_meter);

// Menampilkan hasil dan memberikan kategori
echo "Halo, Nama: $nama<br>";
echo "Tinggi: $tinggi cm<br>";
echo "Berat: $berat kg<br>";
echo " Nilai BMI Anda : $bmi<br>";

if ($bmi < 18.5) {
    echo "Anda termasuk kategori: Kurus";
} elseif ($bmi >= 18.5 && $bmi < 24.9) {
    echo "Anda termasuk kategori: Normal";
} elseif ($bmi >= 25 && $bmi < 29.9) {
    echo "Anda termasuk kategori: Gemuk";
} else {
    echo "Kategori: Obesitas";
}
