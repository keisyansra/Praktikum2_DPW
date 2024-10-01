<?php
function perkenalan($nama, $salam){
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

perkenalan("keisya", "hallo");

echo "<hr/>";

$saya ="Elok";
$ucapanSalam = "Selamat pagi";

perkenalan($saya,$ucapanSalam);
?>