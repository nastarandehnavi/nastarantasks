<?php
$title = "Exercise 7";
include 'header.php';

// Include database connection
include 'nd.php';

// Check if form is submitted
if(isset($_POST['submit'])) {
    // Get form data
    $id = $_POST['Id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city = $_POST['city'];

    // SQL to update record
    $update_query = "UPDATE customers SET first_name='$first_name', last_name='$last_name', city='$city' WHERE id='$id'";
    
    // Perform update
    if(mysqli_query($conn, $update_query)) {
        echo "<div class='alert alert-success'>Record updated successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error updating record: " . mysqli_error($conn) . "</div>";
    }
}

// Check if delete button is clicked
if(isset($_POST['delete'])) {
    // Get ID from form
    $id = $_POST['ID'];

    // SQL to delete record
    $delete_query = "DELETE FROM customers WHERE id='$id'";
    
    // Perform deletion
    if(mysqli_query($conn, $delete_query)) {
        echo "<div class='alert alert-success'>Record deleted successfully</div>";
    } else {
        echo "<div class='alert alert-danger'>Error deleting record: " . mysqli_error($conn) . "</div>";
    }
}

// Close database connection
mysqli_close($conn);
?>

<h2>Input your information</h2>

<form method="post" action="">
    <div class="form-group">
        <label for="ID">ID:</label>
        <input type="number" class="form-control" id="ID" name="ID" required>
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
    <button type="submit" class="btn btn-primary" name="submit">Update</button>
    <button type="submit" class="btn btn-danger" name="delete">Delete</button>
</form>

<?php include 'footer.php'; ?>
