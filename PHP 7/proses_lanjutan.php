<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedbuah = $_POST['buah'];

    if (isset($_POST['warna'])) {
        $selectedwarna = $_POST['warna'];
    } else {
        $selectedwarna = [];
    }

    $selectedjeniskelamin = $_POST['jenis_kelamin'];

    echo "Anda memilih buah : " . $selectedbuah . "<br>";

    if (!empty($selectedwarna)) {
        echo "Warna favorit anda : " .implode(", ", $selectedwarna) . "<br>";
    } else {
        echo "Anda tidak memilih warna favorit.<br>";
    }

    echo "Jenis kelamin anda : " . $selectedjeniskelamin;
}