<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form id="myform" method="post" action="proses_validasi.php">
            <label for="nama">Nama :</label>
            <input type="text" id="nama" name="nama">
            <span id="nama-error" style="color: red;"></span><br>

            <label for="email">Email : </label>
            <input type="text" id="email" name="email">
            <span id="email-error" style="color: red;"></span><br>

            <input type="submit" value="Submit">
        </form>

        <div id="hasil">

        </div>

        <script>
            $(document).ready(function() {
                $("#myform").submit(function(event) {
                    event.preventDefault();

                    var formData = {
                        nama : $("#nama").val(),
                        email : $("#email").val()
                    };

                    $.ajax({
                        type: "POST",
                        url: "proses_validasi.php",
                        data: formData,
                        success: function (response) {
                            $("#hasil").html(response);
                        }
                    })
                });
            });
        </script>
    </body>
</html>