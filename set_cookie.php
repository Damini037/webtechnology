<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username from the form
    $username = $_POST["username"];

    // Set a cookie named "username" with the provided value
    setcookie("username", $username, time() + 3600, "/"); // Expires in 1 hour

    // Redirect back to the main page
    header("Location: index.html");
    exit();
}
?>
