<?php
if (isset($_POST["submit"])) {
    $targetdir ="uploads/"; 
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $filetype = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxsize = 20*1024*1024;
    $check = getimagesize($_FILES["myfile"]["tmp_name"]);

    if ($check !== false){
        if (in_array($filetype, $allowedExtensions) && $_FILES["myfile"]["size"]<=$maxsize){
            if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
                echo "File berhasil diunggah.";
                echo "<img src='$targetfile' width='200' style='height: auto;' alt='Thumbnail'><br>";
            } else {
                echo "Gagal mengunggah file.";
            }
        } else {
            echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
        }
    } else {
        echo "File bukan gambar.";
    }
}
?>