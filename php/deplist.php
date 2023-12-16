<html>
    <head>
        <title> "Department Input Results" </title>
    </head>
    <body>
      
       <?php
            $conn = mysqli_connect("localhost", "group27admin","GoodbyeCircle", "group27");
            if (mysqli_connect_errno()){
              echo "Failed to connect to MYSQL".mysqli_connect_error();
            }

           
            $sql = "SELECT * FROM Department;";
            $result = mysqli_query($conn, $sql);
            echo '<table>';
                echo"<tr>
                    <th>  DepId  </th>
                    <th>  DepName </th>
                    <th>  HId  </th>
                 
                    </tr>";
                   
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>". $row["DepId"]. "</td>
                            <td>". $row["DepName"]. "</td>
                            <td>". $row["HId"]. "</td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }
                   
        ?>
            
    </body>
</html>
