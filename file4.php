<?php
$nama = "Denis";
$totalBelanja = 300000;
$keterangan = "";

if($totalBelanja > 100000){
    $keterangan = "Selamat $nama Anda dapat hadiah";
} else {
    $keterangan = "Terimakasih $nama sudah berbelanja";
}
?>

Nama Pelanggan : <?= $nama ?> <br>
<br> Total Belanja : <?= $totalBelanja ?> <br>
<br> Keterangan : <?= $keterangan ?>