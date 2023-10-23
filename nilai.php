<?php
//Tugas Switchcase
echo "<hr>";
echo ' Tugas  Switch Case <br/>';
echo "<hr>";
//echo "grade";
echo ' Menampilkan grade : <br/>';
$nilai = 50; 

switch (true) {
    case ($nilai >= 90 && $nilai <= 100):
        $grade = 'A';
        break;
    case ($nilai >= 80 && $nilai < 90):
        $grade = 'B';
        break;
    case ($nilai >= 70 && $nilai < 80):
        $grade = 'C';
        break;
    default:
        $grade = 'D';
}

echo "Grade Anda adalah: " . $grade;
