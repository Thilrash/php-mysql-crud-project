<?php

// include the database connection
require_once "../server/connection.php"; 

// update the customer data
if(count($_POST) > 0) {   
    // update query
    $update_query = "UPDATE customer set customer_id='" . $_POST['customer_id']. "', customer_name='" . $_POST['user_name'] . "', customer_address='". $_POST['user_address'] . "' WHERE customer_id='" . $_POST['customer_id'] . "'";
    $update = mysqli_query($conn, $update_query);
    // update
    // checking the update status
    if($update == TRUE) {
        echo "Update Successfully";
    } else {
        echo "Oops!, Error in update process";
    }  
}

mysqli_close($conn);

?>