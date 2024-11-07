<?php
// Database connection parameters
        $host = 'localhost'; // Usually 'localhost' for local development
        $user = 'root'; // MySQL username, typically 'root' for local servers
        $password = ''; // MySQL password, leave blank for default on XAMPP
        $dbname = 'user_management'; // Database name
// Create connection
        $conn = mysqli_connect($host, $user, $password, $dbname);
// Check connection
        if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
        }
?>