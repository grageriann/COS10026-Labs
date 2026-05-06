<?php
session_start(); // Start the session to store user data

// Replace these with your actual details from the lab brief
$valid_user = "Liam"; 
$valid_pass = "106512828";

// 1. Capture the data from the POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // 2. Check if the credentials match
    if ($user === $valid_user && $pass === $valid_pass) {
        // Success! Set the session variable
        $_SESSION['user'] = $user;
        
        // Redirect to the welcome page
        header("Location: welcome.php");
        exit();
    } else {
        // Failure! Redirect back to login with an error flag
        header("Location: login.php?error=1");
        exit();
    }
} else {
    // If someone tries to access this file directly, send them to login
    header("Location: login.php");
    exit();
}
?>