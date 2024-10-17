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
            <input type="text" id="nama" name="nama" required>
            <span id="nama-error" style="color: red;"></span><br><br>

            <label for="email">Email : </label>
            <input type="text" id="email" name="email" required>
            <span id="email-error" style="color: red;"></span><br><br>

            <label for="password">Password : </label>
            <input type="text" id="password" name="password" required>
            <span id="password-error" style="color: red;"></span><br>

            <input type="submit" value="Submit">
        </form>
        
        <div id="hasil"></div>

        <script>
            $(document).ready(function() {
                $("#myform").submit(function(event) {
                    event.preventDefault();

                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var password = $("#password").val();
                    var valid = true;

                    if (nama === ""){
                        $("#nama-error").html("Nama harus diisi.");
                        valid = false;
                    } else {
                        $("#nama-error").text("");
                    }

                    if (email === ""){
                        $("#email-error").html("Email harus diisi.");
                        valid = false;
                    } else {
                        $("#email-error").text("");
                    }

                    if (password.length < 8){
                        $("#password-error").html("Password minimal 8 karakter.");
                        valid = false;
                    } else {
                        $("#password-error").text(password.length < 8);
                    }

                    if (valid) {
                        $.ajax({
                            type: "POST",
                            url: "proses_validasi.php",
                            data: formData,
                            dataType: "json",
                            encode: true,
                            success: function(response) {
                                $("#hasil").html(response);
                            }
                        })
                    }
                });
            });
        </script>
    </body>
</html>