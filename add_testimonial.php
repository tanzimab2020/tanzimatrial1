<?php



// Database connection settings
$servername = "localhost";
$username = "root";
$password = ""; // Default password for XAMPP
$dbname = "testimonials_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle POST request to add a new testimonial
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $supplierId = intval($_POST['supplier_id']);
    $name = $conn->real_escape_string($_POST['name']);
    $testimonialText = $conn->real_escape_string($_POST['testimonial']);
    $type = $conn->real_escape_string($_POST['type']); // Complaint or Review

    if ($supplier_id >= 101 && $supplier_id <= 106 && !empty($name) && !empty($testimonial) && !empty($type)) {
        $sql = "INSERT INTO testimonials (supplier_id, name, testimonial, type) 
                VALUES ($supplier_id, '$name', '$testimonial', '$type')";

        if ($conn->query($sql) === TRUE) {
            echo "Testimonial added successfully!";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Invalid input.";
    }
}

$conn->close();
?>
