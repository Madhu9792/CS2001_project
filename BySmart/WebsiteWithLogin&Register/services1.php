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
            </form> <?php
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

<section class="services-section" style="background: linear-gradient(to bottom right, rgba(91, 179, 214, 0.4), rgba(0, 0, 0, 0.7)); padding: 40px; border-radius: 10px; max-width: 1000px; margin: 40px auto; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); font-family: 'Helvetica Neue', Arial, sans-serif;">
    <div class="services-content" style="color: white; text-align: center;">
        <h1 style="font-size: 36px; margin-bottom: 20px; color: #f9f9f9; font-weight: bold;">-</h1>
        <h1 style="font-size: 36px; margin-bottom: 20px; color: #f9f9f9; font-weight: bold;"><b>Our Featured Products & Services</b></h1>
        <p style="font-size: 18px; line-height: 1.8; margin-bottom: 30px; color: #e0e0e0;">
            At BuySmart, we bring you the best in fashion and technology. Our carefully curated collection of high-quality products ensures that you shop with confidence, knowing that you're getting the best deals on the market. Here’s a quick overview of our featured categories.
        </p>

        <div class="product-grid" style="display: flex; flex-wrap: wrap; justify-content: space-around; gap: 20px;">

            <!-- Product 1: High-Quality Watches -->
            <div class="product-card" style="background-color: rgba(255, 255, 255, 0.15); padding: 20px; border-radius: 10px; width: 45%; max-width: 400px;">
                <img src="p1.png" alt="High-Quality Watches" style="width: 100%; border-radius: 10px; height: auto; margin-bottom: 20px;">
                <h2 style="font-size: 24px; color: #f9f9f9; font-weight: bold;">High-Quality Watches</h2>
            </div>

            <!-- Product 2: Trendy Clothes -->
            <div class="product-card" style="background-color: rgba(255, 255, 255, 0.15); padding: 20px; border-radius: 10px; width: 45%; max-width: 400px;">
                <img src="p2.png" alt="Trendy Clothes" style="width: 100%; border-radius: 10px; height: auto; margin-bottom: 20px;">
                <h2 style="font-size: 24px; color: #f9f9f9; font-weight: bold;">Trendy Clothes</h2>
            </div>

        </div>

        <div style="text-align:center; margin-top:40px;">
            <a href="featured.php" class="btn" style="padding: 12px 24px; background-color: white; color: black; text-decoration: none; border-radius: 5px; font-size: 18px; font-weight: bold;">Shop Now</a>
        </div>
    </div>
</section>
</body>
</html>
 