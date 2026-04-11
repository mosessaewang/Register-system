<?php
    session_start();
    include("connect_db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_r.css">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="register_r.php" method="POST" autocomplete="off">
                <div class="card">
                    <div class="group">
                        <label for="r_user">Username</label>
                        <input type="text" name="r_user" id="r_user" placeholder="Username" required>
                    </div>
                    <div class="group">
                        <label for="r_email">Email</label>
                        <input type="email" name="r_email" id="r_email" placeholder="Email" required>
                    </div>
                    <div class="group">
                        <label for="r_password">Password</label>
                        <input type="password" name="r_password" id="r_password" placeholder="Password" required>
                    </div>
                    <div class="btn">
                        <button type="submit">submit</button>
                    </div>
                    <p class="pa">Have an account?<a href="login.php">Login here</a></p>
            </div>
        </form>
    </div>
</body>
</html>