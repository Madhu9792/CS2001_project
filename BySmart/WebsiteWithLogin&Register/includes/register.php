<?php
// Include database connection file
include 'dbh.inc.php';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize input data
    $name = trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $pwd = trim($_POST['password']);
    // $pwdRepeat = trim($_POST['pwdrepeat']); // Uncomment if password repeat is used for verification

    // Validate input data
    if (empty($name) || empty($email) || empty($pwd)) {
        header('Location: ../register.php?error=emptyinput');
        exit();
    }
    
    // Prepare SQL query to prevent SQL injection
    $sql = "INSERT INTO users (usersName, usersEmail, usersPwd) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('Location: ../register.php?error=stmtfailed');
        exit();
    }

    // Hash the password
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    // Bind parameters and execute the statement
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // Redirect to login page or index page with success message
    header('Location: ../index.php?signup=success');
    exit();
} else {
    // Redirect if accessed directly
    header('Location: ../signup.php');
    exit();
}
?>
