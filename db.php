<?php
$servername = "localhost";
$username = "root";
$password = "";
// $username = "buigiahuy_index";
// $password = "admin123";
$dbname = "buigiahuy_index";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

try {
    // sql to create table
    $sql = "CREATE TABLE phim (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tenphim VARCHAR(30) NOT NULL,
    linkphim TEXT NOT NULL,
    linkanh TEXT,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    if ($conn->query($sql) === TRUE) {
        echo "Table MyGuests created successfully";
    }
} catch (\Throwable $th) {
    
}
