<?php
// Database connection (update with your details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_5_merdeka_agraris";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Example: Insert sample data into website_pages
$seedDataSql = "
INSERT INTO `website_pages` (page_url, page_name, created_at) VALUES
('http://example.com/home', 'Home', NOW()),
('http://example.com/about', 'About Us', NOW());
";

if ($conn->query($seedDataSql) === TRUE) {
    echo "Sample data seeded successfully.<br>";
} else {
    echo "Error seeding data: " . $conn->error . "<br>";
}

// Close connection
$conn->close();
?>
