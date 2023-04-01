<!-- selasa/28/03/2023 -->
<?php
$m1 = ['NIM' => '01111021', 'nama' =>'Andi', 'nilai'=>80];
$m2 = ['NIM' => '01111022', 'nama' =>'Ani', 'nilai'=>70];
$m3 = ['NIM' => '01111023', 'nama' =>'Ari', 'nilai'=>50];
$m4 = ['NIM' => '01111024', 'nama' =>'Aji', 'nilai'=>40];
$m5 = ['NIM' => '01111025', 'nama' =>'Ali', 'nilai'=>90];
$m6 = ['NIM' => '01111026', 'nama' =>'Ain', 'nilai'=>75];
$m7 = ['NIM' => '01111027', 'nama' =>'Budi', 'nilai'=>30];
$m8 = ['NIM' => '01111028', 'nama' =>'Bani', 'nilai'=>85];
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8];
$ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat']

/*Tugas
1. Buatlah grade dari nilai menggunakan switch case
2. Buatlah keterangan jumlah mahasiswa, nilai tertinggi, nilai terendah, rata-rata masukan kedalam tfoot
3. Buatlah predikat dari nilai menggunakan switch case.
*/

?>
<table border="1px" width="60%" bgcolor="blue">
    <thead>
        <tr>
    <?php
    foreach($ar_judul as $judul){
        ?>
        <th><?= $judul ?></th>
        <?php } ?>
    </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($mahasiswa as $mhs){
        $ket = ($mhs['nilai']>= 60) ? 'Lulus' : 'Tidak Lulus';
        //grade
        if($mhs ['nilai']>= 85 && $mhs['nilai'] <= 100) $grade = 'A';
        else if ($mhs['nilai']>= 75 && $mhs['nilai'] < 88) $grade = 'B';
        else if ($mhs['nilai']>= 60 && $mhs['nilai'] < 74) $grade = 'C';
        else if ($mhs['nilai']>= 30 && $mhs['nilai'] < 59) $grade = 'D';
        else if ($mhs['nilai']>= 0 && $mhs['nilai'] < 32) $grade = 'E';
        else $grade = '';
            ?>
            <tr>
                <td><?= $no ?> </td>
                <td><?= $mhs['NIM']?></td>
                <td><?= $mhs['nama']?></td>
                <td><?= $mhs['nilai']?></td>
                <td><?= $ket ?></td>
                <td><?= $grade ?></td>
            </tr>
        <?php $no++; } ?>
    </tbody>
</table>
