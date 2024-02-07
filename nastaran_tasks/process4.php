<?php 
   $title = "your information";
   
   include 'header.php' ?>
 <?php
    if(isset($_POST['submit'])){
        $number = $_POST['number'];
        $counter = 1;
        echo "Numbers from 1 to $number: ";
        while($counter <= $number){
            echo "$counter ";
            $counter++;
        }
    }
    ?>
    
    
<?php include 'footer.php' ?>