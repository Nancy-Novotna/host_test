<?php

require_once 'host_test/database.php';

$result = $conn->query("SELECT * FROM names");

while ($row = $result->fetch_assoc()) {
    echo $row["name"] . "<br>";
}

?>