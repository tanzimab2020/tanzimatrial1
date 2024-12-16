<?php
// backend.php

header("Content-Type: application/json");

// Database credentials
$host = "localhost";          // XAMPP MySQL host
$user = "root";               // Default XAMPP MySQL user
$password = "";               // Default no password
$database = "testimonials_db"; // Name of your database

// Create a connection to the database
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


