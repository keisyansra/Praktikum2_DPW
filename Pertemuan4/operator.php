<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Penjumlahan : $hasilTambah <br>";
echo "Hasil Kurang : $hasilKurang <br>";
echo "Hasil Kali : $hasilKali <br>";
echo "Hasil Bagi : $hasilBagi <br>";
echo "Hasil Sisa Bagi : $sisaBagi <br>";
echo "Hasil Pangkat : $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama : $hasilSama <br>";
echo "Hasil Tidak Sama : $hasilTidakSama <br>";
echo "Hasil Lebih Kecil : $hasilLebihKecil <br>";
echo "Hasil Lebih Besar : $hasilLebihBesar <br>";
echo "Hasil Lebih Kecil Sama : $hasilLebihKecilSama <br>";
echo "Hasil Lebih Besar Sama : $hasilLebihBesrSama <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hsilNotB = !$b;

echo "Hasil And : $hasilAnd <br>";
echo "Hasil Or : $hasilOr <br>";
echo "Hasil Not A : $hasilNotA <br>";
echo "Hasil Not B : $hasilNotB <br>";

echo $a += $b ;
echo "<br>";
echo $a -= $b;
echo "<br>";
echo $a *= $b;
echo "<br>";
echo $a /= $b;
echo "<br>";
echo $a %= $b;
echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "Hasil identik : $hasilIdentik <br>";
echo "Hasil Tidak Identik : $hasilTidakIdentik <br>";
?>