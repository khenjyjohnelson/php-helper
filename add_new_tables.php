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

// Drop tables if they exist to avoid conflicts
$dropTablesSql = "DROP TABLE IF EXISTS `website_clicks`, `website_pages`";
if ($conn->query($dropTablesSql) === TRUE) {
    echo "Tables dropped successfully.<br>";
} else {
    echo "Error dropping tables: " . $conn->error . "<br>";
}

// Create tables
$createTablesSql = "
CREATE TABLE `website_clicks` (
  `click_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `page_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`click_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `website_pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_url` text NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
";

// Execute table creation
if ($conn->multi_query($createTablesSql)) {
    echo "Tables created successfully.<br>";

    // Check for errors
    do {
        if ($result = $conn->store_result()) {
            $result->free();
        }
    } while ($conn->more_results() && $conn->next_result());
} else {
    echo "Error creating tables: " . $conn->error . "<br>";
}

// Close connection
$conn->close();
?>
