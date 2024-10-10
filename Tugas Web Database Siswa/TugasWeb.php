<!DOCTYPE html>
<html>
    <head>
        <title> Data Siswa </title>
        <link rel="stylesheet" type="text/css" href="TugasWeb.css"/>
        <script src="jquery-3.7.1.js"></script>
        <script>
            $(document).ready(function(){
                $("#tombolkotak").click(function(){
                    $("#dropdown").slideToggle("slow");
                });
            });
        </script>
    </head>
    <body>
        <h1><b>Student Database</b></h1>
        <br><br>
        <div id="tombolkotak"> Click To Show Database </div>
        <br>
        <div id="dropdown">
        <table>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
            <?php
                $databsesiswa = array(
                    array("Andi", 15, "10A", "Malang"),
                    array("Siti", 15, "10B", "Batu"),
                    array("Budi", 15, "10A", "Dinoyo"),
                    array("Anton", 25, "15A", "Dinoyo")
                );
                echo "<tr>";
                    echo "<td>". $databsesiswa[0][0] ."</td>";
                    echo "<td>". $databsesiswa[0][1] ."</td>";
                    echo "<td>". $databsesiswa[0][2] ."</td>";
                    echo "<td>". $databsesiswa[0][3] ."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>". $databsesiswa[1][0] ."</td>";
                    echo "<td>". $databsesiswa[1][1] ."</td>";
                    echo "<td>". $databsesiswa[1][2] ."</td>";
                    echo "<td>". $databsesiswa[1][3] ."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>". $databsesiswa[2][0] ."</td>";
                    echo "<td>". $databsesiswa[2][1] ."</td>";
                    echo "<td>". $databsesiswa[2][2] ."</td>";
                    echo "<td>". $databsesiswa[2][3] ."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>". $databsesiswa[3][0] ."</td>";
                    echo "<td>". $databsesiswa[3][1] ."</td>";
                    echo "<td>". $databsesiswa[3][2] ."</td>";
                    echo "<td>". $databsesiswa[3][3] ."</td>";
                echo "</tr>";
            ?>
        </table>
        <br><br>
        <?php
            $totalUmur = 0;
            $jumlahSiswa = count($databsesiswa);
            for ($i = 0; $i < $jumlahSiswa; $i++){
                $totalUmur += $databsesiswa[$i][1];
            }
            $rataUmur = $totalUmur/$jumlahSiswa;
            echo "<h3><b>Student's Average Age : </b></h3>". $rataUmur;
            ?>
        </div>
    </body>
</html>