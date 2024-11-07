<?php
$serverName = "KEISYA\SQLEXPRESS";
$database = "tokoBangunan";

try {
    $koneksi = new PDO("sqlsrv:server=$serverName;database=$database");
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    echo "Koneksi gagal: " .$error->getMessage();
}
?>