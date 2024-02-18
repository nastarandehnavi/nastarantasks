
<?php
$title = "update";


include 'header.php' ?>



<?php
include 'nd.php';
$a = $_GET['Id'];
$result = mysqli_query($conn,"SELECT * FROM customers WHERE Id= '$a'");
$row= mysqli_fetch_array($result);
?>
<h2> Update your information below: </h2>
<form name= "form1" method="post" action="">
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
    <div class="col">
      <input type="text" class="form-control" placeholder="Email" name="Email" required value="<?php echo $row['Email']; ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="phone_number" name="phone_number" required value="<?php echo $row['phone_number']; ?>">
    </div>
    

    
<br>
  <div class="row">
  <div class="col"><button type="submit" class="btn btn-primary" name="submit">Update your Information</button></div>
  <div class="col"><button type="submit" class="btn btn-primary" name="delete">Delete your Information</button></div>
</div>
</form>
<?php 
/* 
The isset() function is used to check if a variable is set and not NULL.
 In this case, it's checking if the $_POST['submit'] 
value is set and not NULL. If the form has been submitted, the value of $_POST['submit'] will be set,
and the code inside the if block will be executed. If the form has not been submitted, 
the value of $_POST['submit'] will not be set, and the code inside the if block will not be executed.
*/
if (isset($_POST['submit'])){

    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city = $_POST['city'];
    $Email = $_POST['Email'];
    $phone_number = $_POST['phone_number'];


    $query = mysqli_query($conn,"UPDATE customers set first_name='$first_name', last_name='$last_name', city='$city', Email='$Email',phone_number='$phone_number' where Id='$a'");
    if($query){
        echo "<h2>Your information is updated Successfully</h2>";
        // if you want to redirect to update page after updating
    }
    else { echo "Record Not modified";}
    }

    if (isset($_POST['delete'])){
        $query = mysqli_query($conn,"DELETE FROM customers where Id='$a'");
        if($query){
            echo "Record Deleted with Id: $a <br>";
            // if you want to redirect to update page after updating
            //header("location: update.php");
        }
        else { echo "Record Not Deleted";}
        }

$conn->close();

?>
  <?php include 'footer.php' ?>