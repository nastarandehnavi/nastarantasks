<?php 
   $title = "your information";
   
   include 'header.php' ?>
<?php
// Check if the 'submit' button in the form was clicked
if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    $first_name = $_POST['first_name'];     // First name
    $last_name = $_POST['last_name'];     // Last name
    $city = $_POST['city'];       // City
    $Email = $_POST['Email'];     // First name
    $phone_number = $_POST['phone_number'];     // First name
   

    // Include the database connection file
    include 'nd.php';

    // Define an SQL query to insert data into the 'customers' table
    $sql = "INSERT INTO customers (first_name, last_name, city, Email, phone_number)
            VALUES ('$first_name', '$last_name', '$city ', '$Email',' $phone_number')";

    // Execute the SQL query using the database connection
    if ($conn->query($sql) === TRUE) {
        // If the query was successful, display a success message
        echo "New record added";
    } else {
        // If there was an error in the query, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
    
    
<?php include 'footer.php' ?>