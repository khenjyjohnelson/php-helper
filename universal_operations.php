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
    // Loop through each table
    while ($row = $result->fetch_row()) {
        $tableName = $row[0];

        // Example: Add a new column (modify as needed)
        $newColumnSql = "ALTER TABLE `$tableName` ADD `new_column` VARCHAR(255) NULL;";
        
        // Example: Modify an existing column (modify as needed)
        $modifyColumnSql = "ALTER TABLE `$tableName` MODIFY `existing_column` INT(11) NOT NULL;";

        // Example: Drop a column (modify as needed)
        $dropColumnSql = "ALTER TABLE `$tableName` DROP COLUMN `unwanted_column`;";

        // Example: Rename a column (modify as needed)
        $renameColumnSql = "ALTER TABLE `$tableName` CHANGE `old_column_name` `new_column_name` VARCHAR(255);";

        // Execute the desired operation (uncomment the operation you want to execute)
        /*
        if ($conn->query($newColumnSql) === TRUE) {
            echo "Column added successfully to '$tableName'.<br>";
        } else {
            echo "Error adding column to '$tableName': " . $conn->error . "<br>";
        }
        */

        /*
        if ($conn->query($modifyColumnSql) === TRUE) {
            echo "Column modified successfully in '$tableName'.<br>";
        } else {
            echo "Error modifying column in '$tableName': " . $conn->error . "<br>";
        }
        */

        /*
        if ($conn->query($dropColumnSql) === TRUE) {
            echo "Column dropped successfully from '$tableName'.<br>";
        } else {
            echo "Error dropping column from '$tableName': " . $conn->error . "<br>";
        }
        */

        /*
        if ($conn->query($renameColumnSql) === TRUE) {
            echo "Column renamed successfully in '$tableName'.<br>";
        } else {
            echo "Error renaming column in '$tableName': " . $conn->error . "<br>";
        }
        */
    }
} else {
    echo "No tables found in the database.";
}

// Close connection
$conn->close();
?>
