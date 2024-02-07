<?php 
   $title = "your information";
   
   include 'header.php' ?>

<?php
     // Check if form is submitted

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Get the input values

        $name = $_POST['name'];
        $age = $_POST['age'];

        // Check if age is 18 or more

        if ($age >= 18) {
            echo "<p>$name, You are eligible .</p>";
        } else {
            echo "<p>$name, You are not eligible.</p>";
        }
     }
    ?>

<?php include 'footer.php' ?>