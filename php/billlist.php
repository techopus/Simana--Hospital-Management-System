<?php 
 $conn = mysqli_connect("localhost", "group27admin","GoodbyeCircle", "group27");
 if (mysqli_connect_errno()){
     echo "Failed to connect to MYSQL".mysqli_connect_error();
 }
?>
<html>
    <head>
        <title> "Bill Results" </title>
    </head>
    <body>
      
       <?php
           
            $sql = "SELECT * FROM Bill;";
            $result = mysqli_query($conn, $sql);
            echo '<table>';
                echo"<tr>
                    <th>  BId  </th>
                    <th>  Patient id  </th>
                    <th>  doctorCharge  </th>
                    <th>  TestType  </th>
                    <th>  TestCharge  </th>
                    <th>  RoomCharge  </th>
                    <th>  Miscellaneous  </th>
                    <th>  Total  </th>
                 
                    </tr>";
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                   
                    <td>". $row["BId"]. "</td>
                    <td>". $row["PId"]. "</td>
                    <td>". $row["DoctorCharge"]. "</td>
                    <td>". $row["TestType"]. "</td>
                    <td>". $row["TestCharge"]. "</td>
                    <td>". $row["RoomCharge"]. "</td>
                    <td>". $row["Miscellaneous"]. "</td>
                    <td>". $row["Total"]. "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 results";
            }
            // mysqli_close($conn);
        ?>
        
        </body>
    </html>