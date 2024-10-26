<?php
// lokasi penyimpanan file yang diunggah 
$targetdirectory = "documents/";

// periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetdirectory)) {
    mkdir($targetdirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalfiles = count($_FILES['files']['name']);

    // loop melalui semua file yang diunggah 
    for ($i = 0; $i < $totalfiles; $i ++) {
        $filename = $_FILES['files']['name'][$i];
        $targetfile = $targetdirectory . $filename;

        // pindahkan file yang diunggah ke direktori penyimpanan 
        if (move_uploaded_file($_FILES['files']['tmp_name']['$i'],$targ)) {
            echo "File $filename berhasil diunggah.<br>";
        } else {
            echo "Gagal mengunggah file $filename.<br>";
        }
    }
} else {
    echo "tidak ada file yang diunggah.";
}