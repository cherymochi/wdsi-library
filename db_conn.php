<?php

// Variables

$server = "localhost";
$username = "root";
$password = "";     
$database = "HSbooks"; 


// Create Connection
$conn = new mysqli($server, $username, $password, $database);

// Check Connection
if ($conn->connect_error){
    die("Connection error: " . $conn->connect_error);
}
echo "Connected successfully";