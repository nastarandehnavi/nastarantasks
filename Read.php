<?php 
   $title = "read your data";
   
   include 'header.php' ?>

<?php
    
    
    include 'nd.php';
    // SQL query to retrieve data from the 'studentsinfo' table
    $sql = "SELECT * FROM customers";
    
    // Execute the SQL query and store the result
    $result = $conn->query($sql);
    
    // Check if there are any results
    if ($result->num_rows > 0) {
        echo "<table class='table'>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>first_name</th>
                        <th>last_name</th>
                        <th>city</th>
                
                    </tr>
                </thead>
                <tbody>";
    
        // Loop through the result set and display data in rows
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td><a href='updatesingle.php?Id=$row[Id]' style = 'color: black;'>$row[Id]</a></td>
                    <td><a href='updatesingle.php?first_name=$row[first_name]' style = 'color: black;'>$row[first_name]</a></td>
                    <td><a href='updatesingle.php?last_name=$row[last_name]' style = 'color: black;'>$row[last_name]</a></td>
                    <td><a href='updatesingle.php?city=$row[city]' style = 'color: black;'>$row[city]</a></td>
                    
                  </tr>";
        }
    
        echo "</tbody></table>";
    } else {
        // Display a message if no results are found
        echo "No results";
    }
    // close the connection when done
    $conn->close();
    ?>



<?php include 'footer.php' ?>