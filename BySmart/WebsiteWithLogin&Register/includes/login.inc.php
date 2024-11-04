<?php
if (isset($_POST["submit"])) {
    // Get user input from form
    $username = trim($_POST["uid"]);
    $pwd = trim($_POST["pwd"]);

    // Include necessary files
    require_once 'dbh.inc.php'; // Ensure dbh.inc.php connects to the database
    require_once 'functions.inc.php'; // Ensure functions.inc.php contains the necessary functions

    // Validate input
    if (emptyInputLogin($username, $pwd)) {
        // Redirect with error message if input is empty
        header('Location: index.php?error=emptyinput');
        exit();
    }

    // Attempt to log in the user
    if (loginUser($conn, $username, $pwd)) {
        // If login is successful, redirect to home page or dashboard
        header('Location: ../home.php');
    } else {
        // If login fails, redirect with an error message
        header('Location: index.php?error=wronglogin');
    }
    exit();
} else {
    // If form is not submitted, redirect to home page
    header('Location: ../home.php');
    exit();
}
?>
