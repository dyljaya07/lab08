<?php
session_start(); // Start the session

// Check if the 'user' session variable is set (meaning the user is logged in)
if (isset($_SESSION['user'])) {
    // If logged in, display a personalized welcome message
    $loggedInUser = $_SESSION['user'];
    echo "<h2>Welcome, " . htmlspecialchars($loggedInUser) . "!</h2>";
    echo "<p>You have successfully logged in.</p>";
    echo "<p><a href='logout.php'>Logout</a></p>"; // Add a logout link (optional but good practice)
} else {
    // If not logged in, redirect back to login.html
    header("Location: login.html");
    exit(); // Ensure script stops execution after redirection
}
?>