<?php
// Database connection settings
$host = '127.0.0.1';
$port = '8889';
$username = 'root';
$password = 'root';

try {
    // Create connection without database name first
    $pdo = new PDO("mysql:host=$host;port=$port", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create database if it doesn't exist
    $pdo->exec("CREATE DATABASE IF NOT EXISTS webshop");
    echo "Database created successfully\n";
    
    // Select the database
    $pdo->exec("USE webshop");
    
    // Read and execute the SQL file
    $sql = file_get_contents('database.sql');
    $pdo->exec($sql);
    echo "Database schema and sample data imported successfully\n";
    
    echo "Setup completed successfully!";
} catch(PDOException $e) {
    die("Error: " . $e->getMessage());
}
?> 