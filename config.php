<?php

// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'hamromechanics_db');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// Establish a database connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>