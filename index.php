<?php
require_once 'database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Host</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <div>
        <h1>Hello, World!</h1>
        <input type="button" value="Click Me" onclick="window.location.href='pageOne.html'">
        <br>
        <?php
        $sql = "SELECT * FROM names;";
        $results = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($results);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($results)) {
                echo $row['name'] . " ";
                echo $row["surname"] ."<br>";
            }
        }

        ?>

    </div>
</body>

</html>