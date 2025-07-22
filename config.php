<?php

    // Verbindung zur DB
    $db_host = "localhost";
    $db_user = "root";
    $db_pw = "";
    $db_name = "fayyum";

    $conn = mysqli_connect($db_host, $db_user, $db_pw, $db_name);
    if (!$conn) {
        die('Connect Error: ' . mysqli_connect_error());
    }

?>
