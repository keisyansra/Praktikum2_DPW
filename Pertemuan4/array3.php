<?php
$daftarNilai = [
    'Matematika' => [['alice',85],['bob',92],['charlie',78]],
    'Fisika' => [['alice',90],['bob',88],['charlie',75]],
    'Kimia' => [['alice', 92],['bob',80],['charlie',85]]
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah : <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama : {$nilai[0]}, Nilai : {[$nilai[1]} <br>";
}
?>