<html>
<head>
    
    <title>Add Patient</title>
</head>

        <?php
            $conn = mysqli_connect("localhost", "group27admin","GoodbyeCircle", "group27");
            if (mysqli_connect_errno()){
              echo "Failed to connect to MYSQL".mysqli_connect_error();
            }
        ?>
        <?php
   

            $sql = "SELECT* FROM Patient;";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result) + 1;
            $query = "INSERT INTO Patient (PId, PName, PAge, PAddress, PPhone, RId, HId) 
            VALUES('$_POST[PId]', '$_POST[PName]', '$_POST[PAge]', '$_POST[PAddress]', '$_POST[PPhone]', '$_POST[RId]', '$_POST[HId]');";
            
            if (!mysqli_query($conn, $query)) {
                die('Error: '.mysqli_error($conn));
              }
              echo("Record addded successfully!");
            
        ?>  

    <a href = "patientlist.php"> Show Patient List</a>

        </body>

</html>
