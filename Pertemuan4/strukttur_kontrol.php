<?php
echo "<b>IF ELSE</b><br>";
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai Huruf : A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai Huruf : B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai Huruf : C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai Huruf : D";
}

echo "<br><br>";
echo "<b>WHILE</b><br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak
500 kilometer <br><br>";

echo "<b>FOR</b><br>";
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah : $jumlahBuah <br><br>";

echo "<b>FOREACH</b><br>";
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}
echo "Total Skor ujian adalah : $totalSkor<br>";

$nialaiSiswa = [85,92,58,64,9.,55,88,79,70,96];

foreach ($nialaiSiswa as $nilai){
    if($nilai < 60){
        echo "Nilai  : $nilai (Tidak lulus)<br>";
        continue;
    }
    echo "Nilai : $nilai (Lulus) <br>";
}
?>