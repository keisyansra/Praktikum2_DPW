<?php
include 'config.php';
function tambahProduk($nama_produk, $kategori_produk, $harga_produk, $jumlah_stok) {
    global $koneksi;
    try {
        $sql = "INSERT INTO produk_tb (nama_produk, kategori_produk, harga_produk, jumlah_stok) VALUES ('$nama_produk', '$kategori_produk', '$harga_produk', '$jumlah_stok')";
        $koneksi->exec($sql);

        return "Produk berhasil ditambahkan";
    } catch (PDOException $error){
        return "Error: ".$error->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="in">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk Toko Bangunan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            width: 100%;
            max-width: 400px;
            display: flex;
            flex-direction: column;
        }
        label {
            color: #333;
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"] {
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        .simpan_data {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            text-align: center;
        }
        .simpan_data:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Produk Toko Bangunan</h2>
        <form action="tambahProduk.php" method="POST">
            <label for="nama_produk">Nama Produk :</label>
            <input type="text" id="nama_produk" name="nama_produk" required>

            <label for="kategori_produk">Kategori Produk :</label>
            <select id="kategori_produk" name="kategori_produk" required>
                <option value="">Pilih Kategori</option>
                <option value="builder hardware">Builder Hardware</option>
                <option value="electrical">Electrical</option>
                <option value="flooring">Flooring</option>
                <option value="houseware">Houseware</option>
                <option value="paints">Paints</option>
                <option value="tools">Tools</option>
            </select>

            <label for="harga_produk">Harga Produk :</label>
            <input type="text" id="harga_produk" name="harga_produk" required>

            <label for="jumlah_stok">Jumlah Stok :</label>
            <input type="text" id="jumlah_stok" name="jumlah_stok" required>

            <button type="submit" class="simpan_data" name="simpan_data">Simpan Data</button>
        </form>
        <?php
            include 'config.php';

            if (isset($_POST['simpan_data'])) {
                $nama_produk = $_POST['nama_produk'];
                $kategori_produk = $_POST['kategori_produk'];
                $harga_produk = $_POST['harga_produk'];
                $jumlah_stok = $_POST['jumlah_stok'];

                $result = tambahProduk($nama_produk, $kategori_produk, $harga_produk, $jumlah_stok) ;
                if ($result) {
                    header('location: display.php');
                    exit();
                } else {
                    echo "Data gagal ditambahkan";
                }
            }
        ?>
    </div>
</body>
</html>