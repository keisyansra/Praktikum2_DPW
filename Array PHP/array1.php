<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
        $listDosen = ["elok nur hamdana","unggul pamenang","bagas nugraha"];
        echo $listDosen[2] . "<br>";
        echo $listDosen[0] . "<br>";
        echo $listDosen[1] . "<br><br>";

        echo "<b>Menggunakan Looping</b><br>";
        foreach ($listDosen as $dosen){
            echo $dosen;
            echo "<br>";
        }
        ?>
    </body>
</html>