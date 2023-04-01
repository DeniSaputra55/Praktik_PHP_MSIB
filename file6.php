<!-- 24-3-2023
Form Proses -->
<form method="GET">
    <label for=""> Nama </label>
    <input type="text" name="nama"><br>
    <label for=""> Alamat </label><br>
    <textarea name="alamat" id="" cols="30" rows="10"></textarea> <br>
    <input type="submit" name="proses" value="simpan">
</form>
<?php
//cara mengatasi error handeling
error_reporting(0);
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$proses = $_GET['proses'];
if(isset($proses)){
    echo 'Nama : ' .$nama. '<br> Alamat : '.$alamat;
}
?>