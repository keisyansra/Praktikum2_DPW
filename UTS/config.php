<?php
$serverName = "KEISYA\SQLEXPRESS";
$database = "periodtrack";
$username = ""; 
$password = ""; 

try {
    
    $conn = new PDO("sqlsrv:server=$serverName;database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    
    echo "Koneksi gagal: " . $error->getMessage();
}

function login($username, $password) {
    global $conn;

    try {
        $sql = "SELECT * FROM register WHERE username = '$username'";
        $stmt = $conn->query($sql);

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if (password_verify($password, $user['password'])) {
                return true; 
            } else {
                return false; 
            }
        } else {
            return false; 
        }
    } catch (PDOException $error) {
        return false;
    }
}


function register($email, $username, $password) {
    global $conn;

    try {
    
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO register (email, username, password) VALUES ('$email', '$username', '$hashedPassword')";
        
        $conn->exec($sql);

        return "Data berhasil ditambahkan.";
    } catch (PDOException $error) {
        return "Data tidak berhasil: " . $error->getMessage();
    } 
}



function data_diri($nama_lengkap, $tgl_lahir, $no_telp, $berat_badan, $tinggi_badan, $riwayat_penyakit) {
    global $conn;

    try {

        $sql = "INSERT INTO data_diri (nama_lengkap, tgl_lahir, no_telp, berat_badan, tinggi_badan, riwayat_penyakit) 
            VALUES ('$nama_lengkap', '$tgl_lahir', '$no_telp', '$berat_badan', '$tinggi_badan', '$riwayat_penyakit')";
        
        $conn->exec($sql);

        return "Data berhasil ditambahkan.";
    } catch (PDOException $error) {
        return "Data tidak berhasil: " . $error->getMessage();
    }
}



function siklusmens($tgl_mulai, $tgl_selesai, $lama_siklus, $mood, $penggunaan_obat) {
    global $conn;

    try {
        // Query langsung menggunakan variabel
        $sql = "INSERT INTO siklusmens (tgl_mulai, tgl_selesai, lama_siklus, mood, penggunaan_obat) 
                VALUES ('$tgl_mulai', '$tgl_selesai', '$lama_siklus', '$mood', '$penggunaan_obat')";
        
        // Eksekusi query
        $conn->exec($sql);

        return "Data berhasil ditambahkan.";
    } catch (PDOException $error) {
        return "Data tidak berhasil: " . $error->getMessage();
    }
}

?>
