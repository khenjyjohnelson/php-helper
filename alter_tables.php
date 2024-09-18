<?php
// Database connection (update with your details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "internship_recycleaware";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get all tables in the database
$sql = "SHOW TABLES";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Loop through each table
    while($row = $result->fetch_row()) {
        $tableName = $row[0];

        // Add created_at and updated_at fields to each table
        $alterTableSql = "ALTER TABLE `$tableName` 
                          MODIFY `created_at` DATETIME NULL, 
                          MODIFY `updated_at` DATETIME NULL";

        if ($conn->query($alterTableSql) === TRUE) {
            echo "Table '$tableName' updated successfully.<br>";
        } else {
            echo "Error updating table '$tableName': " . $conn->error . "<br>";
        }
    }
} else {
    echo "No tables found in the database.";
}

$conn->close();
?>
