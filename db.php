<?php
$host = "sqlXXX.infinityfree.com"; // Replace with your actual DB host
$dbname = "your_db_name"; // Replace with your actual DB name
$username = "your_db_username"; // Replace with your actual DB username
$password = "your_db_password"; // Replace with your actual DB password

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
