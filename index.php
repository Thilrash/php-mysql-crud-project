<body>

    <h2>Insert Customer DetailS</h2>

    <form action="backend/insert-customer.php" method="POST">
        
        <div class="text-name">
            <label for="user_name">Customer Name:</label>
            <input type="text" name="user_name" id="user_name" />
        </div> <br>
        
        <div class="text-address">
            <label for="user_address">Customer Address:</label>
            <textarea name="user_address" id="user_address" cols="30" rows="10"></textarea>
        </div> <br>
        
        <div class="btn-submit">
            <input type="submit" value="submit" name="submit_btn">
        </div>

    </form>

</body>