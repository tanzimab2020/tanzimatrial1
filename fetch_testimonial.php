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
// Fetch testimonials
$sql = "SELECT supplier_id, name, testimonial, type FROM testimonials";
//$sql = "SELECT * FROM `testimonials`;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo json_encode([]);
}

$conn->close();
?>
