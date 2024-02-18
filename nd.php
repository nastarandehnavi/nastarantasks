<?php
$servername = "php24-db-1"; 
$username = "App1";     
$password = "password";     
$dbname = "App1";      

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>