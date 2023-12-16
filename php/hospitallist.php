<?php 
 $conn = mysqli_connect("localhost", "group27admin","GoodbyeCircle", "group27");
 if (mysqli_connect_errno()){
     echo "Failed to connect to MYSQL".mysqli_connect_error();
 }
?>
<html>
    <head>
        <title> "Bill Input Results" </title>
    </head>
    <body>
      
       <?php
           
            $sql = "SELECT * FROM Hospital;";
            $result = mysqli_query($conn, $sql);
            echo '<table>';
            echo "<tr>
             <th>  Hospital Id  </th>
            <th>  Hospital  Name  </th>
            <th>  Hospital Type  </th>
            <th>  Hospital Address  </th>
            </tr>";
        
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>". $row["HId"]. "</td>
                <td>". $row["HName"]. "</td>
                <td>". $row["HType"]. "</td>
                <td>". $row["HAddress"]. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        mysqli_close($conn);
        ?>
    
    </body>

</html>