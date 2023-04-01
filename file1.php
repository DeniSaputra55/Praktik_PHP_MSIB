<?php
echo  'Dokumen PHP saya ada di '.$_SERVER['DOCUMENT_ROOT'];
echo '<br> Nama File'.$_SERVER['SCRIPT_FILENAME'];
echo 'Hello world';
//ini pemanggilan di PHP

//belajar variable
$namaSiswa = "Denis";
$umur = 25;
$berat_badan = 60.5;
$_pekerjaan = "Mahasiswa";
$tes = "coba";

echo '<hr>' ;
echo 'Nama Siswa : '.$namaSiswa; 
echo '<br> Umur : '.$umur;
echo '<br> Berat Badan : '.$berat_badan;
echo '<br> Pekerjaan : '.$_pekerjaan;
?>
<hr>
Nama Siswa : <?= $namaSiswa ?>
<br> Umur : <?= $umur ?>
<br> Berat Badan : <?= $berat_badan ?>
<br>Pekerjaan : <?= $_pekerjaan ?>