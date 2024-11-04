<?php
// Database credentials
$serverName = "localhost";
$dbUsername = "aruna123";
$dbPassword = "aCaT]Sm4fYc9*FaU";
$dbName = "arunafashion";

// Establish database connection
$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

// Check connection
if (!$conn) {
    // Log the error and show a generic message to the user
    error_log("Connection failed: " . mysqli_connect_error());
    die("Database connection failed. Please try again later.");
} else {
    // Optional: Only echo in development or debugging environment
    // echo "Database connection successful";
}

// Ensure the connection is closed properly when done
// mysqli_close($conn); // Uncomment if needed

?>

