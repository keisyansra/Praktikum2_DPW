<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Period Track Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="hero-section3.png">
        </div>
        <h1>Register</h1><br><br>
        <div class="register">
        <form action="register.php" method="POST">
            <label for="email">E-mail :</label>
            <input type="email" placeholder="Email" id="email" 
            name="email" autocomplete="new-email" required>

            <label for="username">Username :</label>
            <input type="text" placeholder="Username" id="username" 
            name="username" autocomplete="new-username" required>

            <label for="password">Password :</label>
            <input type="text" placeholder="Password" id="password" 
            name="password" autocomplete="new-password" required>

            <button type="submit">Register</button>
        </form>
        <?php
            include_once 'config.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = $_POST['password'];

                if (!empty($email) && !empty($username) && !empty($password)) {
                    
                    $result = register($email, $username, $password);
                    echo $result; 

                    if (!empty($email) && !empty($username) && !empty($password)){
                        header("Location: login.php");
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
    </div>
</body>
</html>
