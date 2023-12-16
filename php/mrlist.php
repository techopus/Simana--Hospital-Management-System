<html>
    <head>
        <title> "Record Input Results" </title>
    </head>
    <body>
        <?php 
            $conn = mysqli_connect("localhost", "group27admin","GoodbyeCircle", "group27");
            if (mysqli_connect_errno()){
            echo "Failed to connect to MYSQL".mysqli_connect_error();
            }
       
            
           $sql = "SELECT * FROM MedicalRecord;";
           $result = mysqli_query($conn, $sql);
           echo '<table>';
            echo"<tr>
            <th>Record Id</th>
            <th>Admit  Date</th>
            <th>Initial Report</th>
            <th>Final Report</th>
            <th>Patient Id</th>
            <th>Doctor Id</th>
            </tr>";
        
              if ($result->num_rows > 0) {
                 while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>". $row["RId"]. "</td>
                <td>". $row["AdmitDate"]. "</td>
                <td>". $row["IReport"]. "</td>
                <td>". $row["FReport"]. "</td>
                <td>". $row["PId"]. "</td>
                <td>". $row["DId"]. "</td></tr>";
            }
             echo "</table>";
                 } else {
             echo "0 results";
             }
        
        ?>
   
    </body>

</html>