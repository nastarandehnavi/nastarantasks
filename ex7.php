<?php
$title = "Exercise 7";


include 'header.php' ?>

        <h2>Input  your information</h2>

         <form method="post" action="process5.php">
            <div class="form-group">
                <label for="Id">Id:</label>
                <input type="number" class="form-control" Id="Id" name="Id" required>
            </div>
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>

            
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="text" class="form-control" id="Email" name="Email" required>
            </div>

            
            <div class="form-group">
                <label for="phone_number">phone_number:</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" required>
            </div>
            
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

        </form>
    </div>
 
 <?php include 'footer.php'; ?>