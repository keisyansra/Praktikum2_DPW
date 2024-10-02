<?php
$skorTiapLevel = [50, 100, 80, 150, 250, 150];
$banyakSkor = count($skorTiapLevel);
$totalSkor = 0;

for ($i = 0; $i < $banyakSkor; $i++){
    $totalSkor += $skorTiapLevel[$i];
}

echo "Total skor pemain adalah : " . $totalSkor;
echo "<br>";

if($totalSkor >= 500){
    echo "SELAMAT! Pemain mendapatkan hadiah tambahan";
} else {
    echo "Mohon Maaf! Pemain tidak mendapatkan hadiah tambahan";
}
?>

