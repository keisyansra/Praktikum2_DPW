<?php
$daftarKaryawan = [
    ['alice', 7], ['bob', 3], ['charlie', 9], ['david', 5],
    ['eva', 6]
];

$karyawanPengalaman5Tahun = [];
foreach ($daftarKaryawan as $karyawan){
    if ($karyawan[1] > 5){
        $karyawanPengalaman5Tahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun : " . implode(',', $karyawanPengalaman5Tahun);

?>