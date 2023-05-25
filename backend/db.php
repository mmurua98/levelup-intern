<?php

// MySQL database credentials
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'levelup-test';

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

?>