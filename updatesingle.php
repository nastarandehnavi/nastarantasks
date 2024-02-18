<?php
$title = "update";
include 'header.php';

include 'nd.php';

// Check if ID is provided in the URL
if(isset($_GET['Id'])) {
    $a = $_GET['Id'];
    
    // Fetch data for the provided ID
    $result = mysqli_query($conn,"SELECT * FROM customers WHERE Id= '$a'");
    $row = mysqli_fetch_array($result);
?>

<h2> Update your information below: </h2>
<form name="form1" method="post" action="">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="first_name" name="first_name" required value="<?php echo $row['first_name']; ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="last_name" name="last_name" required value="<?php echo $row['last_name']; ?>" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="city" name="city" required value="<?php echo $row['city']; ?>">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col"><button type="submit" class="btn btn-primary" name="submit">Update your Information</button></div>
    <div class="col"><button type="submit" class="btn btn-primary" name="delete">Delete your Information</button></div>
  </div>
</form>

<?php
    // Handle form submissions
    if(isset($_POST['submit'])) {
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        // Use $fname and $lname variables instead of $first_name and $last_name
        $query = mysqli_query($conn,"UPDATE customers set first_name='$fname', last_name='$lname' where Id='$a'");
        if($query) {
            echo "<h2>Your information is updated Successfully</h2>";
        } else {
            echo "Record Not modified";
        }
    }

    if(isset($_POST['delete'])) {
        // Handle delete operation
        $query = mysqli_query($conn,"DELETE FROM customers where Id='$a'");
        if($query) {
            echo "Record Deleted with Id: $a <br>";
        } else {
            echo "Record Not Deleted";
        }
    }
}

$conn->close();
include 'footer.php';
?>
