<?php
$kursiTersedia = 45;
$kursiTerpakai = 28;
$sisaKursi = $kursiTersedia - $kursiTerpakai;
$persentaseKursi = ($sisaKursi / $kursiTersedia)*100;

echo "Jadi persentase sisa kursi adalah : $persentaseKursi %";