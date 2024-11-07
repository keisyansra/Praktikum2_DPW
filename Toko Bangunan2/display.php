<?php
include 'config.php'; 
$sql = "SELECT * FROM produk_tb";
$result = $koneksi->query($sql);
?>
<!DOCTYPE html>
<html lang="in">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Bangunan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ffffff; /* Background putih */
            color: #000000;
            margin: 0;
            padding: 20px; 
        }
        .table {
            background-color: #ffffff;
            padding: 80px;
            border-radius: 5px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            width: 80%;
            margin: 20px auto; /* Jarak tambahan dengan tombol */
        }
        .judul {
            font-size: 24px;
            font-weight: bold;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 20px;
        }
        .button-container {
            text-align: center;
            margin-bottom: 20px; /* Jarak antara tombol dan tabel */
        }
        .tambah {
            background-color: #2c3e50;
            color: white;
            padding: 10px 20px; 
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
        .tambah:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th {
            background-color: #2c3e50; /* Warna abu-abu gelap */
            color: white; /* Tulisan putih */
            padding: 10px;
        }
        td {
            background-color: #ffffff;
            color: #000000; /* Tulisan hitam */
            padding: 10px;
            border: 1px solid #dee2e6;
        }
        .action-button {
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }
        .update-button {
            background-color: #007bff; /* Biru */
        }
        .delete-button {
            background-color: #ff0000; /* Merah */
        }
        .update-button:hover {
            background-color: #0056b3;
        }
        .delete-button:hover {
            background-color: #cc0000;
        }
        /* Responsif: untuk layar kecil */
        @media (max-width: 600px) {
            table {
                font-size: 14px;
            }
            .tambah {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <h1 class="judul">Toko Bangunan</h2><br>
    <button><a href="tambahProduk.php" class="tambah">Tambah Produk</a></button>
    <br><br>
    <div class="container">
        
        <table border="1" cellpading="10" cellspacing="0" class="table-display">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
                <?php
                    if ($result->rowCount() == 0) {
                        echo "<tr><td colspan='6' style='text-align: center;'>Tidak ada produk terdaftar.</td></tr>";
                    } else {
                        while ($produk = $result->fetch()) {
                            echo "<tr>";
                            echo "<td>" . $produk['id_produk'] . "</td>";
                            echo "<td>" . $produk['nama_produk'] . "</td>";
                            echo "<td>" . $produk['kategori_produk'] . "</td>";
                            echo "<td>" . $produk['harga_produk'] . "</td>";
                            echo "<td>" . $produk['jumlah_stok'] . "</td>";
                            echo "<td><button><a href='editProduk.php?id_produk=".$produk['id_produk']."'>Update</a></button>
                            <button><a href='deleteProduk.php?id_produk=".$produk['id_produk']."'>Delete</a></button></td>";
                            echo "</tr>";
                        }
                    }
                ?>
        </table>
    </div>
</body>
</html>