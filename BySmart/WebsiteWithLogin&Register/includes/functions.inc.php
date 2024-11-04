

<?php
// Check for empty input during signup
function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    return empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat);
}

// Validate username
function invalidUid($username) {
    return !preg_match("/^[a-zA-Z0-9]*$/", $username);
}

// Validate email
function invalidEmail($email) {
    return !filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Check if passwords match
function pwdMatch($pwd, $pwdRepeat) {
    return $pwd !== $pwdRepeat;
}

// Check if username or email already exists
function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($resultData);
    mysqli_stmt_close($stmt);
    return $row ? $row : false;
}

// Create a new user
function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../login.php?error=none");
    exit();
}

// Check for empty input during login
function emptyInputLogin($username, $pwd) {
    return empty($username) || empty($pwd);
}

// Log in the user
function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);
    if (!$uidExists) {
        header("Location: ../signin.php?error=wronglogin1");
        exit();
    }
    $pwdHashed = $uidExists["usersPwd"];
    if (!password_verify($pwd, $pwdHashed)) {
        header("Location: ../signin.php?error=wronglogin2");
        exit();
    }
    session_start();
    $_SESSION["userid"] = $uidExists["usersId"];
    $_SESSION["useruid"] = $uidExists["usersUid"];
    $_SESSION["username"] = $uidExists["usersName"];
    header("Location: ../index.php");
    exit();
}
?>



