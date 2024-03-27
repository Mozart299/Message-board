<?php
session_start();

// Log out the user
$_SESSION = array();
session_destroy();

// Redirect to the login page
header('Location: index.php');
exit;