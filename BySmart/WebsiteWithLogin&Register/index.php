<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with Login & Registration</title>
    <link rel="stylesheet" href="style.css">
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
            <h2 style="text-align:center">Login</h2>
            <form action="includes/login.inc.php" method="post">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" name="uid" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" name="pwd" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox"> Remember me</label>
                    <b><a href="#">Forgot Password?</a></b>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
                </div>
            </form>

            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo '<div class="error">Fill in all fields</div>';
                } elseif ($_GET["error"] == "wronglogin") {
                    echo '<div class="error">Invalid Details!</div>';
                } elseif ($_GET["error"] == "stmtfailed") {
                    echo '<div class="error">Something went wrong!</div>';
                } elseif ($_GET["error"] == "none") {
                    echo '<div class="error">Account created!</div>';
                }
            }
            ?>
        </div>

        <div class="form-box register">
            <h2 style="text-align:center">Registration</h2>
            <form action="includes/register.php" method="post">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person-circle-outline"></ion-icon>
                    </span>
                    <input type="text" name="username" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" name="passwordRepeat" required>
                    <label>Confirm Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" required> I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account?<a href="#" class="login-link">Login</a></p>
                </div>
            </form>

            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo '<div class="error">Fill in all fields</div>';
                } elseif ($_GET["error"] == "invaliduid") {
                    echo '<div class="error">Invalid Username!</div>';
                } elseif ($_GET["error"] == "invalidemail") {
                    echo '<div class="error">Invalid Email!</div>';
                } elseif ($_GET["error"] == "passwordsdontmatch") {
                    echo '<div class="error">Passwords do not match!</div>';
                } elseif ($_GET["error"] == "stmtfailed") {
                    echo '<div class="error">Something went wrong!</div>';
                } elseif ($_GET["error"] == "none") {
                    echo '<div class="error">Account created!</div>';
                } elseif ($_GET["error"] == "usernametaken") {
                    echo '<div class="error">Username/Email already in use!</div>';
                }
            }
            ?>
        </div>
    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <?php
    include_once 'footer.php';
    ?>
</body>
</html>
