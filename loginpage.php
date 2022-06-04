<?php

?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!--font awesome link-->
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--css link-->
    <link rel="stylesheet" href="style.css">
</head>

<body background="image/image3..jpg">
     <!--js link-->
     <script src="script.js"></script>

    <!--header-->
    <!-- <header class="header">
        <a href="#" class="logo"><i class="fa-solid fa-heart-pulse fa-beat"></i> Medcare </a> 
         
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#services">services</a>
            <a href="#about">about</a>
            <a href="#doctors">doctors</a>
            <a href="contact.html">contact us</a>
        </nav>  
        <div id="menu-btn" class="fa-solid fa-bars" ></div>
    </header>   -->



    <!--form section-->

        <div class="login-form">
            <h1>Login</h1>

            <form action="login.php" method="post">

                <div class="cardtext">
                    <input type="email" required>
                    <label>Email</label>
                    <span></span>
                </div>

                <div class="cardtext">
                    <input type="password" required>
                    <label>Password</label>
                    <span></span>
                </div>

                <div class="cardpass">Forgot Password ?
                    <input type="submit" value="login">
                </div>

                <div class="cardsignup">Have not account?
                <a href="signup.php">sign-in</a>
                </div>
            </form>

        </div>
        

    </body>
</html>