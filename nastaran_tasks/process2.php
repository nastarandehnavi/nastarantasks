<?php 
   $title = "your information";
   
   include 'header.php' ?>

<?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the selected month
        $selected_month = $_POST['month'];

        // Use a switch case to determine the response based on the selected month
        switch ($selected_month) {
            case 'August':
                echo "It's August, so it's still holiday.";
                break;
            default:
                echo "Not August, this is $selected_month so I don't have any holidays.";
                break;
        }
    }
    ?>
<?php include 'footer.php' ?>