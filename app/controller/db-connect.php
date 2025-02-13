<?php
$dbHost = 'localhost';
$dbName = 'u622998484_hzzz';
$dbUser = 'u622998484_hzzz';
$dbPassword = 'j7W8&|o~o#';
// $dbUser = 'root';
// $dbPassword = '';

try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $GLOBALS['pdo'] = $pdo;
 
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}

