<?php
$host = "db";  // MySQL host (service name from docker-compose.yml)
$port = 3306;        // MySQL port
$username = "root";  // MySQL username (from docker-compose.yml)
$password = "abcd1234";  // MySQL password (from docker-compose.yml)
$database = "project";  // MySQL database name (from docker-compose.yml)

// Create a connection
$con = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Perform database operations
// Example: $result = $conn->query("SELECT * FROM your_table");

// Close the connection when you're done
$con->close();
?>
