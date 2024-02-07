<?php 
   $title = "your information";
   
   include 'header.php' ?>

<?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the number from the form
        $number = $_POST['number'];

        // Print 
        
        echo "<h3>Multiplication Table of $number:</h3>";
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$number x $i</td>";
            echo "<td>" . ($number * $i) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
    
<?php include 'footer.php' ?>