<?php
$nialaiSiswa = [
    ['Alice', 85],['Bob',92],
    ['Charlie',78],['David',64],
    ['Eva',90]
];
$totalNilai = 0;

foreach ($nialaiSiswa as $nilai) {
    $totalNilai += $nilai[1];
}
$rataRataNilai = $totalNilai / count($nialaiSiswa);

echo "<b> Daftar Siswa Dengan Nilai diatas Rata - Rata ($rataRataNilai)</b><br>";

foreach ($nialaiSiswa as $siswa){
    if($siswa[1] >= $rataRataNilai){
        echo "Siswa {$siswa[0]} dengan nilai {$siswa[1]}<br>";
    }
}
?>