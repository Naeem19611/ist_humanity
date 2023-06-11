<?php
// Database Connection Credentials
$server_name   = "localhost";
$database_name = "ist_humanity";
$database_user = "root";
$database_pass = "";

// Establish Connection
$conn = mysqli_connect($server_name, $database_user, $database_pass, $database_name);
        
// Connection Test
if(!$conn) {
    die("Connection Failed: " . mysqli_connect_error()); 
} 
