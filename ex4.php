<?php 
   $title = "Exercise 4 : ";
  
   
   include 'header.php' ?>
 
    <h2>4.2:  Check Eligibility for Voting :</h2>
    <form method="post" action="process1.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>
        <input type="submit" value="Check Eligibility">
    </form>

   
 
    <h2><p>4.3: Check Current Month:</p></h2>
    <form method="post" action="process2.php">
        <label for="month">Select Current Month:</label>
        <select id="month" Name="month">
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
        </select>
        <br><br>
        <input type="submit" value="Check Month">
    </form>

    
    <h2>4.4:  Multiplication Table:</h2>
    <form method="post" action="process3.php">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <br><br>
        <input type="submit" value="Give Table">
    </form>

    

    <h2>4.5:  While Loop:</h2>
   <?php
if (isset($_POST['submit'])) {
  $number = $_POST['number'];

  // Validate input
  if (!is_numeric($number) || $number <= 0) {
    echo "Please enter a positive integer.";
  } else {
    $count = 1;
    echo "<h2>Numbers from 1 to $number:</h2>";
    echo "<ol>";

    while ($count <= $number) {
      echo "<li>$count</li>";
      $count++;
    }

    echo "</ol>";
  }
}
  ?>


    <form method="post" action="process4.php">
        Enter a number: <input type="text" name="number"><br>
        <input type="submit" name="submit" value="Print Numbers">
    </form>

    <h2>4.6:  Foreach Loop:</h2>
    <?php
    $myarray = array("HTML", "CSS", "PHP", "JavaScript");

   foreach ($myarray as $element) {
    echo "$element <br>";
    }
     ?>


<?php include 'footer.php' ?>