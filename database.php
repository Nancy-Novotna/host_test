<?php

$dbHost = "sql307.infinityfree.com";
$dbName = "if0_42921101_test";

$dbUsername = "if0_42921101";
$dbPassword = "hostWebovky654";

$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Chyba připojení: " . mysqli_connect_error());
}




// ZE SOUBORU data.php
// require_once 'host_test/database.php';

// $result = $conn->query("SELECT * FROM names");

// while ($row = $result->fetch_assoc()) {
//     echo $row["name"] . "<br>";
// }


?>