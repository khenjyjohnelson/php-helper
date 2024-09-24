<?php
// Database connection (update with your details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_5_merdeka_agraris";

// Create a backup file name
$backupFile = 'backup_' . date('Y-m-d_H-i-s') . '.sql';
$command = "mysqldump --opt -h $servername -u $username -p$password $dbname > $backupFile";

// Execute the backup command
system($command);
echo "Backup created: $backupFile";
?>
