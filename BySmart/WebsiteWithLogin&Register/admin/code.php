<?php
session_start();
$connection = mysqli_connect("localhost","root","","arunafashion");
if(isset($_POST['registerbtn']))
{
    $name = $_POST['username'];
    $email =  $_POST['email'];
    $pwd = $_POST['password'];
  $cpassword = $_POST['confirmpassword'];
    
    if($pwd === $cpassword)
    {
        $query = "UPDATE users SET usersName='$usersName', usersEmail='$usersEmail', usersPwd='$usersPwd' WHERE usersId='$id'";
        $query_run = mysqli_query($connection,$query);
        
        if ($query_run)
        {
            //echo "Saved";
            $_SESSION['success']= "Admin Profile Added";
            header('Location:register1.php');
        } else
        {
            $_SESSION['status']= "Admin Profile Not Added";
            header('Location:register1.php');

        }
    } else
    {
        $_SESSION['status']= "Password and Confirm Password Does Not Match";
            header('Location:register1.php');

    }
}
if (isset($_POST['registerbtn'])) {
    $name = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $pwd = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
     
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        redirectWithMessage('register1.php', 'Invalid  format');
    } elseif ($pwd !== $cpassword) {
        redirectWithMessage('register1.php', 'Password and Confirm Password Do Not Match');
    } else {
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        $stmt = $connection->prepare("INSERT INTO users (usersName, usersEmail, usersPwd) VALUES (?, ?, ?)");
        
        if ($stmt === false) {
            redirectWithMessage('register1.php', 'Database error: ' . $connection->error);
        }
        $stmt->bind_param("sss", $name, $email, $hashedPwd);

        if ($stmt->execute()) {
            redirectWithMessage('register1.php', 'User Added', 'success');
        } else {
            redirectWithMessage('register1.php', 'User Not Added: ' . $stmt->error);
        }

        $stmt->close();
    }
}

if(isset($_POST['update-btn']))
{
    $id=$_POST['edit-id'];
    $usersName=$_POST['editusername'];
    $usersEmail=$_POST['editemail'];
    $usersPwd=$_POST['editpwd'];

    $query = "UPDATE users SET usersName='$usersName', usersEmail='$usersEmail', usersPwd='$usersPwd' WHERE usersId='$id'";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
    $_SESSION['success'] = "Your Data is Updated";
    header('Location:register1.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        header('Location:register1.php');   
    }
}


session_start();
$connection = new mysqli("localhost", "root", "", "arunafashion");

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Function to redirect with a message
function redirectWithMessage($location, $message, $type = 'status') {
    $_SESSION[$type] = htmlspecialchars($message); // Use htmlspecialchars to prevent XSS
    header('Location: ' . $location);
    exit();
}

if (isset($_POST['deletebtn'])) {
    $id = intval($_POST['deleteid']);

    $stmt = $connection->prepare("DELETE FROM users WHERE usersId=?");
    if ($stmt === false) {
        redirectWithMessage('register1.php', 'Database error: ' . $connection->error);
    }
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        redirectWithMessage('register1.php', 'Your Data is DELETED', 'success');
    } else {
        redirectWithMessage('register1.php', 'Your Data is NOT DELETED: ' . $stmt->error);
    }

    $stmt->close();
}


if (isset($_POST['login_btn'])) {
    $email_login = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password_login = $_POST['password'];

    if (filter_var($email_login, FILTER_VALIDATE_EMAIL) === false) {
        redirectWithMessage('login1.php', 'Invalid email format');
    } else {
        $stmt = $connection->prepare("SELECT usersName, usersPwd FROM users WHERE usersEmail=?");
        if ($stmt === false) {
            redirectWithMessage('login1.php', 'Database error: ' . $connection->error);
        }
        $stmt->bind_param("s", $email_login);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($user = $result->fetch_assoc()) {
            if (password_verify($password_login, $user['usersPwd'])) {
                $_SESSION['username'] = $user['usersName']; // Set session username
                header('Location:register1.php');
                exit();
            } else {
                redirectWithMessage('register1.php', 'Your Email and Password are Valid');
            }
        } else {
            redirectWithMessage('login1.php', 'Your Email and Password are Invalid');
        }
        $stmt->close();
    }
}

$connection->close();
?>
