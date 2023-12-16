<html>
    <head>
        <title> "Medlist Results" </title>
    </head>
    <body>
    <?php 
        $conn = mysqli_connect("localhost", "group27admin","GoodbyeCircle", "group27");
        if (mysqli_connect_errno()){
        echo "Failed to connect to MYSQL".mysqli_connect_error();
         }
        
           
            $sql = "SELECT * FROM Medicine;";
            $result = mysqli_query($conn, $sql);
            echo '<table>';
        echo"<tr>
        <th>  Medicine Id  </th>
        <th>  Medicine  Name  </th>
        <th>  Medicine Type  </th>
        </tr>";
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>". $row["MId"]. "</td>
                <td>". $row["MName"]. "</td>
                <td>". $row["MType"]. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
       
        ?>
    </body>

</html>
