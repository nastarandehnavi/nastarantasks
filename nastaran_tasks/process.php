<?php 
   $title = "your information";
   
   include 'header.php' ?>

  <?php
    // Retrieve the values from the form
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    // echo the create a message
    echo "<h3>Hello $firstname $lastname ,<br> You are welcome to my site.</h3>";
    ?>







<?php include 'footer.php' ?>