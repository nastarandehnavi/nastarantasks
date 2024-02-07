<?php 
$title = "Exercise3: Variable, Strings & Operators";

//  Bootstrap CSS
echo ' <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> ';

// header
include 'header.php'; 
?>

<h2 class="mt-5">Form Creation: Create a simple HTML form to collect the user's Firstname and Lastname.
    Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag.
    Table & Form Guide</h2>

    
<div class="container mt-3">
    <form method="post" action="process.php">
        <div class="form-group">
            <label for="firstname">Firstname:</label>
            <input type="text" class="form-control" ID="firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Lastname:</label>
            <input type="text" class="form-control" ID="lastname" name="lastname">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Nastaran</td>
      <td>dehnavi</td>
      <td>@Hamk.fi</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Reza</td>
      <td>Fattahi</td>
      <td>@gmail</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Chista</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
  </tbody>
</table>
</div>

<h2>

<?php
// 1: Defining 2 string variables
$str1 = "Hello";
$str2 = "World";

// 2: Join the strings to eachother
$HelloWorld = $str1 . " " . $str2;

// 3: Print the joined string
echo "Strings: " . $HelloWorld . "<br>";

//4: Print length of  string
$length = strlen($HelloWorld);
echo "Length Of The String: "  . $length;
?>
</h2>
<h2>
<br>
<?php

$num1 = 298;
$num2 = 234;
$num3 = 46;

// Add numbers
$total = $num1 + $num2 + $num3;

// Output the result
echo " The Sum Of $num1 , $num2 ,  and  $num3 is : $total";

?>




</h2>

<?php
$browser = $_SERVER['HTTP_USER_AGENT'];

if (strpos($browser, 'Firefox') !== false) {
    echo "You are using Firefox.";
} elseif (strpos($browser, 'Chrome') !== false) {
    echo "You are using Chrome.";
} elseif (strpos($browser, 'Safari') !== false) {
    echo "You are using Safari.";
} elseif (strpos($browser, 'Opera') !== false) {
    echo "You are using Opera.";
} elseif (strpos($browser, 'MSIE') !== false || strpos($browser, 'Trident') !== false) {
    echo "You are using Internet Explorer.";
} else {
    echo "Unable to detect your browser.";
}
?>

<?php include 'footer.php' ?>