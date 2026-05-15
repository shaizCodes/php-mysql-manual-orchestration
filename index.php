<?php

// Database connection parameters
$host = 'localhost'; // MySQL server host
$username = 'root'; // MySQL username
$password = ''; // MySQL password
$database_name = 'temporary_database'; // Database name
$database_port = 3306; // Database port

try {
    // Create connection
    $mysqli = new mysqli($host, $username, $password, $database_name, $database_port);
    echo "[SUCCESS] Communication channel established. MySQL Server Version: " . $mysqli->server_info . "\n";
    $mysqli->close();
} catch (Throwable $e) {
    echo "[FAILURE] Runtime Exception caught:\n";
    echo $e->getMessage() . "\n";
    exit(1);
}

?>
