<?php
$dbhost = 'localhost';     // Database host (e.g., localhost)
$dbuser = 'username';      // Database username
$dbpass = 'password';      // Database password
$dbname = 'book'; // Database name

// Create a connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful, you can perform database operations here

// Close the connection when you're done
$conn->close();
?>