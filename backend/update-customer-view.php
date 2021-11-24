<?php

// include the database connection
require_once "./server/connection.php";

// get all data related to the customer id
if(isset($conn)) {
    $customer_update_id = $_GET['customer_id'];
    $result = mysqli_query($conn, "SELECT * FROM customer WHERE customer_id=' " . $customer_update_id . "'"); 
    $row = mysqli_fetch_array($result);
}

mysqli_close($conn);

?>