<!-- 24-3-2023
Kondisional -->
<?php
$nama = "Denis";
$nilai = 80;

if($nilai >= 85 && $nilai <= 100) $grade = "A";
else if ($nilai >= 75 && $nilai <= 84) $grade = "B";
else if ($nilai >= 60 && $nilai <= 74) $grade = "C";
else if ($nilai >= 30 && $nilai <= 69) $grade = "D";
else if ($nilai >= 0  && $nilai <= 29) $grade = "E";
else $grade = "";

switch ($grade) {
    case "A" : $predikat = "memuaskan";break;
    case "B" : $predikat = "bagus";break;
    case "C" : $predikat = "cukup";break;
    case "D" : $predikat = "kurang";break;
    case "E" : $predikat = "buruk";break;
    default : $predikat ="";
    
} 
?>
Nama : <?= $nama ?> <br>
<br> Nilai : <?= $nilai ?> <br>
<br> Grade : <?= $grade ?> <br>
<br> Predikat : <?= $predikat ?> 