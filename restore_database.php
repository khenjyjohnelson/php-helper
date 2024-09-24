<?php
// Database connection (update with your details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_5_merdeka_agraris";

// Specify the path to your backup file
$backupFile = 'path_to_backup_file.sql'; // Update this with the actual path

// Restore the database
$command = "mysql -h $servername -u $username -p$password $dbname < $backupFile";
system($command);
echo "Database restored from backup.";
?>
