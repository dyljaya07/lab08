<?php

session_start(); // Start a session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the username is 'YourName' and the password is 'YourStudentID'
    if ($username === 'YourName' && $password === 'YourStudentID') {
        // Login successful: Store the username in a session variable
        $_SESSION['user'] = $username;

        // Redirect to welcome.php
        header("Location: welcome.php");
        exit(); // Ensure script stops execution after redirection
    } else {
        // Login failed: Redirect back to login.html with an error message
        header("Location: login.html?error=invalid");
        exit(); // Ensure script stops execution after redirection
    }
} else {
    // If the page is accessed without a POST request (e.g., directly in the browser)
    echo "<p>This page should only be accessed via a POST request from the login form.</p>";
}

?>