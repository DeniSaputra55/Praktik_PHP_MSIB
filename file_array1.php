<!-- selasa/28/03/2023 -->
<?php
//membuat array scallar(satu dimensi)
$ar_buah = ['pepaya', 'mangga', 'pisang', 'jambu'];

foreach($ar_buah as $id => $buah){
    echo '<br> Tampilkan key '.$id;
}

echo '<hr>';
foreach($ar_buah as $buah){
    echo '<br> Tampilkan data '.$buah;
}
?>