<?php
function tampilkanAngka(int $jumlah, int $indeks){
    echo "Perulangan ke {$indeks} <br> ";

    //panggil diri sendiri selam $indeks <= $jumlah 
    if ($indeks < $jumlah){
        tampilkanAngka($jumlah, $indeks + 1);
    }
}

tampilkanAngka(20, 2);
?>