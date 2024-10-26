<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siklus Menstruasi</title>
    <link rel="stylesheet" href="siklusmens.css">
</head>
<body>
    <div class="container">
        <h1>Siklus Menstruasi</h1>
        <form action="siklusmens.php" method="POST">
            <label for="tgl_mulai">Hari Pertama :</label>
            <input type="date" id="tgl_mulai" name="tgl_mulai" required>

            <label for="tgl_selesai">Hari Terakhir :</label>
            <input type="date" id="tgl_selesai" name="tgl_selesai" required>

            <label for="lama_siklus">Lama Siklus (hari):</label>
            <input type="number" id="lama_siklus" name="lama_siklus" required>

            <label for="mood">Mood :</label>
            <input type="text" id="mood" name="mood" required>

            <label for="penggunaan_obat">Penggunaan Obat :</label>
            <input type="text" id="penggunaan_obat" name="penggunaan_obat" required>

            <button type="submit">Simpan Siklus </button>
        </form>
        <?php
            include 'config.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $tgl_mulai = $_POST['tgl_mulai'];
                $tgl_selesai = $_POST['tgl_selesai'];
                $lama_siklus = $_POST['lama_siklus'];
                $mood = $_POST['mood'];
                $penggunaan_obat = $_POST['penggunaan_obat'];

                if (!empty($tgl_mulai) && !empty($tgl_selesai) && !empty($lama_siklus) && !empty($mood) && !empty($penggunaan_obat)) {
                    
                    $result = siklusmens($tgl_mulai, $tgl_selesai, $lama_siklus, $mood, $penggunaan_obat);
                    echo $result; 
                } else { 
                    return "Harap mengisi data dengan lengkap.";
                }
            } 
        ?>
    </div>
</body>
</html>
