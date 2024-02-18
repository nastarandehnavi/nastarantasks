<?php 
$title = "Exercise 4 : ";
include 'header.php';
?>

<div class="container">
    <h2>4.2: Check Eligibility for Voting :</h2>
    <form method="post" action="process1.php">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>
        <button type="submit" class="btn btn-primary">Check Eligibility</button>
    </form>

    <h2>4.3: Check Current Month:</h2>
    <form method="post" action="process2.php">
        <div class="form-group">
            <label for="month">Select Current Month:</label>
            <select class="form-control" id="month" name="month">
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
        </div>
        <button type="submit" class="btn btn-primary">Check Month</button>
    </form>

    <h2>4.4: Multiplication Table:</h2>
    <form method="post" action="process3.php">
        <div class="form-group">
            <label for="number">Enter a number:</label>
            <input type="number" class="form-control" id="number" name="number" required>
        </div>
        <button type="submit" class="btn btn-primary">Give Table</button>
    </form>

    <h2>4.5: While Loop:</h2>
    <?php
    if (isset($_POST['submit'])) {
        $number = $_POST['number'];

        // Validate input
        if (!is_numeric($number) || $number <= 0) {
            echo "<p>Please enter a positive integer.</p>";
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
        <div class="form-group">
            <label for="number">Enter a number:</label>
            <input type="text" class="form-control" id="number" name="number">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Print Numbers</button>
    </form>

    <h2>4.6: Foreach Loop:</h2>
    <?php
    $myarray = array("HTML", "CSS", "PHP", "JavaScript");

    foreach ($myarray as $element) {
        echo "$element <br>";
    }
    ?>
</div>

<?php include 'footer.php'; ?>
