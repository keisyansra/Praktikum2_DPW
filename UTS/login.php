<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Period Track Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <h1>Login</h1>
            <hr>
            <form action="login.php" method="POST">
                <label for="username">Username :</label>
                <input type="text" placeholder="Username" id="username" name="username" autocomplete="new-username" required>

                <label for="password">Password :</label>
                <input type="password" placeholder="Password" id="password" name="password" autocomplete="new-password" required>

                <button type="submit" name="submit">Login</button>

            </form>
            <?php
                include_once 'config.php';

                if (isset($_POST["submit"])) {
                    $username = strtolower(trim($_POST["username"])); 
                    $password = $_POST["password"]; 

                    
                    $stmt = $conn->prepare("SELECT * FROM register WHERE username = ?"); 
                    $stmt->execute([$username]);

                    $row = $stmt->fetch(PDO::FETCH_ASSOC);

                    if ($row) {
            
                        if ($row["password"] === $password) { 
                        
                        $_SESSION['password'] = true; 
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['password'] = $row['password']; 

                        exit;
                    } else {
                    $error = "Password salah!";
                }
            } else {
                $error = "Username tidak ditemukan!"; 
            }
        }
        ?>
        </div>
        <div class="right">
            <img src="right.png" alt="">
        </div>
    </div>
</body>
</html>
