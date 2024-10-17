<!DOCTYPE html>
<html>
    <head>
        <title>Contoh Form dengan PHP dan JQuery</title>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    </head>
    <body>
        <h2>Form Contoh</h2>
        <form id="myform">
            <label for="buah">Pilih Buah :</label><br>
            <select name="buah" id="buah">
                <option value="apel">Apel</option>
                <option value="pisang">Pisang</option>
                <option value="mangga">Mangga</option>
                <option value="jeruk">Jeruk</option>
            </select>

            <br>

            <label>Pilih Warna Favorit: </label>
            <input type="checkbox" name="warna[]" value="merah">Merah <br>
            <input type="checkbox" name="warna[]" value="biru">Biru <br>
            <input type="checkbox" name="warna[]" value="hijau">Hijau <br>

            <label>Pilih Jenis Kelamin : </label>
            <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
            <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan <br>

            <br>

            <input type="submit" value="Submit">
        </form>

        <div id="hasil">

        </div>

        <script>
            $(document).ready(function() {
                $("#myform").submit(function (e){
                    e.preventDefault(); // mencegah pengiriman form secara default

                    // mengumpulkan data form
                    var formData = $("#myform").serialize();

                    // kirim data ke server php
                    $.ajax({
                        url: "proses-lanjut.php",
                        type: "POST",
                        data: formData,
                        success: function (response) {
                            //tampilkan hasil dari server di div hasil
                            $("#hasil").html(response);
                        }
                    });
                });
            });
        </script>
    </body>
</html>