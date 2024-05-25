<?php
// Database configuration
$dbHost = 'localhost'; // Your MySQL host (usually localhost)
$dbUsername = 'root'; // Your MySQL username
$dbPassword = ''; // Your MySQL password (leave blank if you don't have one)
$dbName = 'library_db'; // Your database name

// Create database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// echo "تم الاتصال بنجاح"; // Just for testing purposes, you can remove this line once confirmed

// Set charset to UTF-8
$conn->set_charset("utf8");
?>


