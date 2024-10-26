<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri Period Tracker</title>
    <link rel="stylesheet" href="data_diri.css">
</head>
<body>
    <div class="container">
        <h2>Data Pengguna</h2>
        <form action="data_diri.php" method="POST">
            <label for="nama_lengkap">Nama Lengkap :</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" required>

            <label for="tgl_lahir">Tanggal Lahir :</label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" required>

            <label for="no_telp">No Telepon :</label>
            <input type="text" id="no_telp" name="no_telp" required>

            <label for="berat_badan">Berat Badan (kg) :</label>
            <input type="number" id="berat_badan" name="berat_badan" step="0.1" required>

            <label for="tinggi_badan">Tinggi Badan (cm) :</label>
            <input type="number" id="tinggi_badan" name="tinggi_badan" step="0.1" required>

            <label for="riwayat_penyakit">Riwayat Penyakit :</label>
            <input type="text" id="riwayat_penyakit" name="riwayat_penyakit" required>

            <button type="submit">Simpan Data</button>
        </form>
        <?php
            include_once 'config.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nama_lengkap = $_POST['nama_lengkap'];
                $tgl_lahir = $_POST['tgl_lahir'];
                $no_telp = $_POST['no_telp'];
                $berat_badan = $_POST['berat_badan'];
                $tinggi_badan = $_POST['tinggi_badan'];
                $riwayat_penyakit = $_POST['riwayat_penyakit'];

                if (!empty($nama_lengkap) && !empty($tgl_lahir) && !empty($no_telp) && !empty($berat_badan) && !empty($tinggi_badan) && !empty($riwayat_penyakit)) {
                    
                    $result = data_diri($nama_lengkap, $tgl_lahir, $no_telp, $berat_badan, $tinggi_badan, $riwayat_penyakit);
                    echo $result; 

                    if ($result){
                        header("Location: siklusmens.php");
                        exit();
                    } else {
                        echo "Data gagal ditambahkan.";
                    }
    
                } else {
                    echo "Harap mengisi data dengan lengkap.";
                }
            } 
        ?>
    </div>
</body>
</html>
