<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with Login & Registration</title>
<link rel ="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2 class="logo">BuySmart</h2>
        <nav class="navigation">
            <a href="index.php">Home</a>
            <a href="about1.php">About</a>
            <a href="services1.php">Services</a>
            <a href="contact1.php">Contact</a>

            <button class="btnLogin-popup">Login</button>

    
        </nav>
        </header>
<div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close-circle-outline"></ion-icon>
        </span>
        <div class="form-box login">
        <h2 style= "text-align:center">Login</h2>
        <form action="includes/login.inc.php" method="post">
            <div class="input-box">
               <span class="icon">
               <ion-icon name="mail"></ion-icon></span>
               <input type="email" required>
               <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon">
                <ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" required>
                <label>Password</label>
            </div>
            <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
       <b> <a href="#">Fogot Password?</a></b></div>
       <button type="submit" class="btn">Login</button>
            <div class="login-register">
                <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
            </div>
        </form> 
    <?php
    if(isset($_GET["error"])){
        if ($_GET["error"]=="emptyinput"){
            echo '<div class= "error">Fill in the all fields</div>';
        } elseif ($_GET["error"]=="wronglogin"){
            echo '<div class= "error">Invalid Details!</div>';
    }elseif ($_GET["error"]=="stmtfailed"){
        echo '<div class= "error">Something went wrong!</div>';
    }elseif ($_GET["error"]=="none"){
        echo '<div class= "error">Account created!</div>';
}
}
    ?>
    
        </div>

     
        <div class="form-box register">
            <h2 style= "text-align:center">Registration</h2>
            <form action="includes\register.php" method="post">
                <div class="input-box">
                <span class="icon">
                    <ion-icon name="person-circle-outline"></ion-icon></span>
                <input type="text" required name="username">
                <label>Username</label>
             </div>
                <div class="input-box">
                   <span class="icon">
                   <ion-icon name="mail"></ion-icon></span>
                   <input type="email" required name="email">
                   <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required name="password">
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required name="password">
                    <label> c Password</label>
                </div>
                <div class="remember-forgot">
                <label><input type="checkbox">I agree to the terms & conditions</label>
            </div>
           <b>  <br />
           <button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account?<a href="#" class="login-link">Login</a></p>
                </div>
            </form> 
    <?php
    if(isset($_GET["error"])){
        if ($_GET["error"]=="emptyinput"){
            echo '<div class= "error">Fill in the all fields</div>';
        } elseif ($_GET["error"]=="invaliduid"){
            echo '<div class= "error">Invalid Username!</div>';
    } elseif ($_GET["error"]=="invalidemail"){
        echo '<div class= "error">Invalid Email!</div>'; 
    }elseif ($_GET["error"]=="passwordsdontmatch"){
        echo '<div class= "error">Passwords are not matching!</div>';
    }elseif ($_GET["error"]=="stmtfailed"){
        echo '<div class= "error">Something went wrong!</div>';
    }elseif ($_GET["error"]=="none"){
        echo '<div class= "error">Account created!</div>';
    }elseif ($_GET["error"]=="usernametaken"){
        echo '<div class= "error">Username/Email already in use!</div>';
}
}
    ?>
    </div>
    </div>
    
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
<section  class="about-section" text aligan="center"  style="background: linear-gradient(to bottom right, rgba(91, 179, 214, 0.4), rgba(0, 0, 0, 0.7)); padding: 40px; border-radius: 10px; max-width: 900px; margin: 40px auto; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); font-family: 'Helvetica Neue', Arial, sans-serif;">
    <div class="about-content" style="color: white; text-align: center;">
        <h1 style="font-size: 36px; margin-bottom: 20px; color: #f9f9f9; font-weight: bold;">-</h1>
        <h1 style="font-size: 36px; margin-bottom: 20px; color: #f9f9f9; font-weight: bold;">About BuySmart</h1>
        <p style="font-size: 18px; line-height: 1.8; margin-bottom: 30px; color: #e0e0e0;">
            Welcome to <b>BuySmart</b>, your trusted platform for affordable yet top-quality fashion and tech essentials. Since our founding, we’ve committed to offering an unrivaled selection of the latest <b>watches</b>, <b>clothes</b>, <b>headsets</b>, and <b>phone back covers</b> to suit every style and preference.
        </p>
        <p style="font-size: 18px; line-height: 1.8; margin-bottom: 30px; color: #e0e0e0;">
            At BuySmart, we are dedicated to providing a seamless and secure shopping experience, where customer satisfaction comes first. Whether you're upgrading your wardrobe or looking for the perfect tech accessory, we have exactly what you need. Every item in our store is carefully selected for its quality and value, ensuring you get the best without breaking the bank.
        </p>
        <p style="font-size: 18px; line-height: 1.8; margin-bottom: 30px; color: #e0e0e0;">
            <b>Our mission</b> is to make shopping simple, accessible, and enjoyable for everyone. Shop smarter, not harder—at BuySmart, we believe in delivering more than just products. We deliver a premium shopping experience with exceptional service.
        </p>
        <div style="text-align:center; margin-top:40px;">
            <a href="featured.php" class="btn" style="padding: 12px 24px; background-color: white; color: #444; text-decoration: none; border-radius: 5px; font-size: 18px; font-weight: bold;">Explore Our Products</a>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>