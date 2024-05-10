<?php
    // Making a database connection
    $server = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "sports-database";
    $conn = mysqli_connect($server, $username, $password, $dbname);

    if ($conn->connect_errno) {
        die("Failed to connect to MySQL: " . $conn->connect_error);
    }
?>
