<?php

// include the backend of the view customer part for one time
include_once('backend/view-customer.php');

?>


<html>
    <head>
        <title>Customer Management</title>

        <!-- stylesheet -->
        <link rel="stylesheet" href="style/w3.css">
    </head>
    <body>
        
        <?php if(mysqli_num_rows($result) > 0) { ?>

        <!-- table start from here -->
        <div class="w3-container">
            <h2>Customer Details</h2>

            <a href="index.php" class="w3-button w3-green">Add Customer</a> <br><br>

            <table class="w3-table-all">

                <thead>
                    <tr class="w3-light-greay">
                        <th>Customer ID</th>
                        <th>Customer Name</th>
                        <th>Customer Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <?php 
                
                $i = 0;
                while($row = mysqli_fetch_array($result)) {

                ?>

                <tr>
                    <td><?php echo $row["customer_id"]; ?></td>
                    <td><?php echo $row["customer_name"]; ?></td>
                    <td><?php echo $row["customer_address"]; ?></td>
                    <td> 
                        <a class="w3-button w3-indigo" href="update-customer-ui.php?customer_id=<?php echo $row["customer_id"]; ?>">Update</a>
                        <a class="w3-button w3-red" href="backend/delete-customer.php?customer_id=<?php echo $row["customer_id"]; ?>">Delete</a>
                    </td>
                </tr>

                <?php
                
                    $i++;
                }

                ?>

            </table>

        <?php
            
        } else {
            echo "No Result Found";
        }
            
        ?>

        </div>

    </body>
</html>