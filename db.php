<?php

    $server_name = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($server_name, $username, $password);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>