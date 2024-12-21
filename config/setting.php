<?php
// Database credentials
$db_username = "root";
$db_password = "";
$db_hostname = "localhost";
$db_name = "gtpcom_desain";

// Site configuration
$base_site_name = "cm";
$base_url = "localhost/".$base_site_name;
$base_name_site = "Desain";

try {
    // Create PDO connection
    $dsn = "mysql:host=$db_hostname;dbname=$db_name;charset=utf8mb4";
    $db_handle = new PDO(dsn: $dsn, username: $db_username, password: $db_password);
    
    // Set error mode to throw exceptions
    $db_handle->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
    $db_handle->setAttribute(attribute: PDO::ATTR_DEFAULT_FETCH_MODE, value: PDO::FETCH_ASSOC);
    
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
