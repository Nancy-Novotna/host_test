<?php

// Connecting to a DB on Infinityfree - OLD

// $dbHost = "sql307.infinityfree.com";
// $dbName = "if0_42921101_test";

// $dbUsername = "if0_42921101";
// $dbPassword = "hostWebovky654";

// $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// if (!$conn) {
//     die("Chyba připojení: " . mysqli_connect_error());
// }


if ($_SERVER['SERVER_NAME'] === 'localhost') {
    // Lokální databáze
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'names';
} else {
    // InfinityFree
    $host = 'sql307.infinityfree.com';
    $user = 'if0_42921101';
    $password = 'hostWebovky654';
    $database = 'if0_42921101_test';
}

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Chyba připojení k databázi: " . mysqli_connect_error());
}


?>