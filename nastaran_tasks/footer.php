
</div>
  </div>
  <div class="row">
<footer style="background-color: rgb(55, 110, 177);  color: white;">

<div class="col-md-4">Nastaran Dehnavi</div>
        <div class="col-md-4">Course: Web Programming</div>
        <div class="col-md-4">HAMK University</div>

       


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    

<?php
$page_name = basename($_SERVER['PHP_SELF']);
$last_modified_time = filemtime($page_name);
$formatted_last_modified_time = date("F j, Y, g:i a", $last_modified_time);
echo " $page_name - Was Last modified On: $formatted_last_modified_time";
?>

</footer>
    
   
    </body>
    </html>