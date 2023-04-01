<!-- Kamis-30-03-2023 -->
<?php
require 'oop5_pegawai.php';

$pegawai1 = new Pegawai('0111','Andi','Manager','Islam','Menikah');

$ar_pegawai = [$pegawai1];

foreach($ar_pegawai as $pegawai){
    $pegawai->cetak();
}
?>