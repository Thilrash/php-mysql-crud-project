<?php

// include the backend of update customer
require_once("backend/update-customer-view.php");

?>

<body>

    <h2>Update Customer Details</h2>

    <form action="backend/update-customer.php" method="POST" name="customer_info_update">
        
        <input type="hidden" name="customer_id" value="<?php echo $row['customer_id']; ?>">

        <div class="text-name">
            <label for="user_name">Customer Name:</label>
            <input type="text" name="user_name" id="user_name" value="<?php echo $row['customer_name']; ?>"/>
        </div> <br>
        
        <div class="text-address">
            <label for="user_address">Customer Address:</label>
            <textarea name="user_address" id="user_address" cols="25" rows="5"><?php echo $row['customer_address']; ?></textarea>
        </div> <br>
        
        <div class="btn-submit">
            <input type="submit" value="Update Customer" name="update_btn">
        </div>
        
    </form>

</body>