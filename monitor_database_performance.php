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

// Get database performance metrics
$sql = "SHOW STATUS LIKE 'Uptime'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$uptime = $row['Value'];

$sql = "SHOW STATUS LIKE 'Threads_connected'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$threadsConnected = $row['Value'];

echo "Database Uptime: $uptime seconds<br>";
echo "Threads Connected: $threadsConnected<br>";

// Close connection
$conn->close();
?>
