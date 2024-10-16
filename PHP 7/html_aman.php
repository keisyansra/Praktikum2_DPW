<!DOCTYPE html>
<html>
    <head>
        <title>Form Email</title>
    </head>
    <body>
    <?php
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Input yang diterima: " .$input. "<br>";
        echo "Email yang valid: " .$email. "<br>";
    } else {
        echo "Email tidak valid!";
    }
    ?> 
    <form method="post" action="<?php filter_var($email, FILTER_VALIDATE_EMAIL) ?>">
        <label for="input">Input : </label>
        <input type="text" name="input" id="input" required><br><br>

        <label for="email">Email : </label>
        <input type="email" name="email" id="email" required><br><br>

        <button type="submit">Submit</button>
    </form>
    </body>
</html>