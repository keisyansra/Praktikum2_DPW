<?php

$nama = @$_GET['nama']; // tanda @ agar tidk ada peringatan error ketika key-nya kosong 
$usia = @$_GET['usia'];

echo "Halo {$nama}! apakah benar anda berusia {$usia} tahun?";
?>