<?php
// Database connection (update with your details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_5_merdeka_agraris";

// Log file path
$logFile = 'db_changes.log';

function logChange($message) {
    global $logFile;
    $timestamp = date('Y-m-d H:i:s');
    file_put_contents($logFile, "[$timestamp] $message\n", FILE_APPEND);
}

// Example of logging a change
logChange("Migration of 'website_pages' table completed.");

// Add your database operations here...

?>
