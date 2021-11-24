<?php

// require database connection
require_once '../server/connection.php';

// delete sql query
$sql_query = "DELETE FROM customer WHERE customer_id='" . $_GET['customer_id'] . "'";

// execute the sql query
// check the delete statust whether it's deleted or not 
if(mysqli_query($conn, $sql_query)) {
    echo "Successfully deleted the record";
} else {
    echo "Error in delete the customer record";
}

// closing database connection
mysqli_close($conn);

?>