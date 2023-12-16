<?php 
 $conn = mysqli_connect("localhost", "group27admin","GoodbyeCircle", "group27");
 if (mysqli_connect_errno()){
     echo "Failed to connect to MYSQL".mysqli_connect_error();
 }
?>
<html>
    <head>
        <title> "Patient Lists" </title>
    </head>
    <body>
      
       <?php

            $sql = "SELECT* FROM Patient;";
            $result = mysqli_query($conn, $sql);
            echo '<table>';
            echo"<tr>
            <th>  Patient Id </th>
            <th>  Patient Name  </th>
            <th>  Patient Age </th>
            <th>  PAddress  </th>
            <th>  PPhone  </th>
            <th>  RId  </th>
            <th>  HId  </th>
            </tr>";



            if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                 echo "<tr>
                <td>". $row["PId"]. "</td>
                <td>". $row["PName"]. "</td>
                <td>". $row["PAge"]. "</td>
                <td>". $row["PAddress"]. "</td>
                <td>". $row["PPhone"]. "</td>
                <td>". $row["RId"]. "</td>
                <td>". $row["HId"]. "</td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
       
        ?>
    
    </body>

</html>
