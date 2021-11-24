<?php

// include the database connection
include("./server/connection.php");

if(isset($conn)) {
    $result = mysqli_query($conn, "SELECT * FROM customer"); 
}

?>