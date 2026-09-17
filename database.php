<?php

$dbHost = "sql307.infinityfree.com";
$dbName = "if0_42921101_test";

$dbUsername = "if0_42921101";
$dbPassword = "hostWebovky654";

try {

    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}




?>