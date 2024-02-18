<?php
$servername = "localhost"; 
$username = "nastaran23000";     
$password = "R5OEMKLK";     
$dbname = "wp_nastaran2300";      

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>