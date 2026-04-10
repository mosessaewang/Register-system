<?php
    session_start();
    include("connect_db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_t.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <form action="login_r.php" method="POST" autocomplete="off">
                <div class="group">
                    <label for="r_email">Email</label>
                    <input type="email" name="r_email" id="r_email" placeholder="Email" require>
                </div>
                <div class="group">
                    <label for="r_password">Password</label>
                    <input type="password" name="r_password" id="r_password" placeholder="Password"  require>
                </div>
                <div class="btn">
                    <button type="submit">Submit</button>
                </div>
                <p class="pa">Don't have an account? <a href="register.php">Sign Up</a></p>
                <h5 class="h">Log in with</h5>
                <div class="icon">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>