<?php
session_start();
include("connect_db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index1.css">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Portfolio</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICE</a></li>
                    <li><a href="#">DESIGN</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="search">
                <a href="#"><button class="btn">search</button></a>
            </div>

            <div class="hero-text">
                <h1>Hi, Welcome to my Portfolio</h1>
                <p class="p">Web Developer | Designer</p><br>
                <div class="description">
                    <p>I specialize in Web Design, utilizing HTML, CSS, and modern editing <br> 
                    software to create high-quality, validated design elements.</p>
                </div>
                <a href="#" class="btnt">See My Work</a>
            </div>
        </div>
    </div>
</body>
</html>