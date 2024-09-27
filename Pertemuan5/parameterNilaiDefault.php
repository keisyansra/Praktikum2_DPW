<?php
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda <br/>";
}

perkenalan("Keisya","Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);

?>