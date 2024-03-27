<?php
//Start the session
session_start();

// Connect to the database
$mysqli = new mysqli('localhost', 'root', '', 'message_board');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the username and password from the POST request
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL Injection vulnerability
    $result = $mysqli->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");

    if ($result->num_rows > 0) {
        // Login successful, create session
        $_SESSION['username'] = $username;
        echo 'Login successful';
    } else {
        // Login failed
        echo 'Invalid username or password';
    }
}

