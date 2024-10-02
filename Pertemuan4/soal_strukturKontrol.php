<?php

$nilaiSiswa = [85,92,78,64,90,75,88,79,70,96];
sort($nilaiSiswa);
$nilaiSiswa = array_slice($nilaiSiswa, 2, -2);
$banyakSiswa = count($nilaiSiswa);
$totalNilai = 0;

for ($i = 0; $i < $banyakSiswa; $i++){
    $totalNilai += $nilaiSiswa[$i];
}

$rataRataNilai = $totalNilai / $banyakSiswa;
echo "Total Nilai dari $banyakSiswa siswa adalah $totalNilai dan 
Rata rata nilai dari $banyakSiswa adalah $rataRataNilai";

?>