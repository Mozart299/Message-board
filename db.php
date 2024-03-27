<?php
// Database connection variables
$host = 'localhost';
$dbname = 'message_board';
$user = 'root';
$pass = '';

// Connect to the database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
