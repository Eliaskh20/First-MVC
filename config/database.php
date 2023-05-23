<?php

$host = 'localhost';
$username= 'root';
$password = '';
$database = 'darr10';

$dsn = "mysql:host=$host;dbname=$database";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
try {
$conn = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {
    echo "Failed to connect to database: " . $e->getMessage();
    exit;
}
?>