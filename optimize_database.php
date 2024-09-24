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

// Get all tables in the database
$sql = "SHOW TABLES";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_row()) {
        $tableName = $row[0];

        // Optimize each table
        $optimizeSql = "OPTIMIZE TABLE `$tableName`";
        if ($conn->query($optimizeSql) === TRUE) {
            echo "Table '$tableName' optimized successfully.<br>";
        } else {
            echo "Error optimizing table '$tableName': " . $conn->error . "<br>";
        }
    }
} else {
    echo "No tables found in the database.";
}

// Close connection
$conn->close();
?>
