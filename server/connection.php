<?php

// initialize the local variables to make connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "crud_test_project";

// create connection
$conn = new mysqli($servername, $username, $password, $database);

// check the connection
if($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
} else {
    echo "Connected Successfully with Database";
    echo "<br>";
}

?>