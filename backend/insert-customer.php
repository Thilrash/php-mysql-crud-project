<?php

// include the database connection
require('../server/connection.php'); 

// check the submit button if user clicked
if(isset($_POST['submit_btn'])) {

    // initailize the variable
    $user_name = $_POST['user_name'];
    $user_address = $_POST['user_address'];

    // insert query to mysql db
    $sql_query = "INSERT INTO customer (customer_name, customer_address) VALUES ('$user_name', '$user_address')";

    // check whether data inserted or not
    if(mysqli_query($conn, $sql_query)) {
        echo 'New customer record successfully added to the database';
    } else {
        echo "Error : " . $sql_query . " " . mysqli_error($conn);
    }

    // finally close the connection once the above steps are completed
    mysqli_close($conn);
}
?>