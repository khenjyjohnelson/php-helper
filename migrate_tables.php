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

// Example migration: Adding a new column to a table
$migrationSql = "ALTER TABLE `website_pages` ADD `description` TEXT NULL;";

if ($conn->query($migrationSql) === TRUE) {
    echo "Migration successful: Column 'description' added to 'website_pages'.<br>";
} else {
    echo "Error during migration: " . $conn->error . "<br>";
}

// Close connection
$conn->close();
?>
