<?php 
 $conn = mysqli_connect("localhost", "group27admin","GoodbyeCircle", "group27");
 if (mysqli_connect_errno()){
     echo "Failed to connect to MYSQL".mysqli_connect_error();
 }
?>
<html>
    <head>
        <title> "Doctor Input Results" </title>
    </head>
    <body>
      
       <?php

            $sql = "SELECT* FROM Doctor;";
            $result = mysqli_query($conn, $sql);
            echo '<table>';
            echo"<tr>
            <th>  Doctor Id </th>
            <th>  Doctor Name  </th>
            <th>  Specialization  </th>
            <th>  Phone  </th>
            <th>  Address  </th>
            <th>  Salary  </th>
            <th>  Hospital Id  </th>
            <th>  Dep Id  </th>
         
            </tr>";



            if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                 echo "<tr>
                <td>". $row["DId"]. "</td>
                <td>". $row["DName"]. "</td>
                <td>". $row["Specialization"]. "</td>
                <td>". $row["DPhone"]. "</td>
                <td>". $row["DAddress"]. "</td>
                <td>". $row["DSalary"]. "</td>
                <td>". $row["HId"]. "</td>
                <td>". $row["DepId"]. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
       
        ?>
    
    </body>

</html>
