<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Asap+Condensed&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body background="image/forest.jpeg">
    
    <header>
         <nav>
            <a href="body.php">
                <img src="image/logo1.png" alt="logo">
            </a>
            <ul class="navi">
                <li class="navi1"><a href="body.php">Home</a></li>
                <li class="navi1"><a href="#">Portfolio</a></li>
                <li class="navi1"><a href="#">About me</a></li>
                <li class="navi1"><a href="#">Contact</a></li>
            </ul>

            <div class=>

                <?php
                    if (isset($_SESSION["id"])) {
                        echo '<form action="includes/logout.php" method="post" class="form1">
                        <button class= "logout" type="submit" name="logout">Logout</button>
                    </form>';
                    }
                    else {
                        echo '<a href="signup.php" class="signup">Sign Up</a><form action="includes/login.php" method="post" class="form">
                        <input class="user" type="text" name="mailuid" placeholder="Username / E-mail">
                        <input class="pass" type="password" name="pwd" placeholder="Password">
                        <button class="login" type="submit" name="login-submit">Login</button>
                    </form>';
                    }
                ?>
            </div>
         </nav>
    </header>