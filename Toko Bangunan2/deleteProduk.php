<?php
include 'config.php';

if (isset($_GET['id_produk'])){
    $id_produk = $_GET['id_produk'];
    
    try {
        $sql = "DELETE FROM produk_tb WHERE id_produk = $id_produk";
        $koneksi->exec($sql);

        header('Location: display.php');
    } catch (PDOException $error){
        echo "Error: " .$error->getMessage();
    }
}
?>