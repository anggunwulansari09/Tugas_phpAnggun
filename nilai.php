<?php
//Tugas Switchcase
echo "<hr>";
echo ' Tugas  Switch Case <br/>';
echo "<hr>";
//echo "grade";
echo ' Menampilkan grade : <br/>';
$nilai = 85;

switch (true) {
    case ($nilai >= 90):
        echo "Grade A";
        break;
    case ($nilai >= 80):
        echo "Grade B";
        break;
    case ($nilai >= 70):
        echo "Grade C";
        break;
    case ($nilai >= 60):
        echo "Grade D";
        break;
    default:
        echo "Grade E (Tidak Lulus)";
}
