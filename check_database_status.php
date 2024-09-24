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
$sql = "SHOW TABLE STATUS";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Table</th><th>Rows</th><th>Data Size (MB)</th><th>Index Size (MB)</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['Name']}</td>
                <td>{$row['Rows']}</td>
                <td>" . round($row['Data_length'] / 1024 / 1024, 2) . "</td>
                <td>" . round($row['Index_length'] / 1024 / 1024, 2) . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No tables found in the database.";
}

// Close connection
$conn->close();
?>
