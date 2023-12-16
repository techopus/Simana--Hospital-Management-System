<html lang = "en">
<head>
    
    <title>Add Doctor</title>
</head>

        <?php
            $conn = mysqli_connect("localhost", "group27admin","GoodbyeCircle", "group27");
            if (mysqli_connect_errno()){
              echo "Failed to connect to MYSQL".mysqli_connect_error();
            }

   

            $sql = "SELECT* FROM Doctor;";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result) + 1;
            
            $query = "INSERT INTO Doctor (DId, DName, Specialization, DPhone, DAddress, DSalary, HId, DepId) 
            VALUES('$_POST[DId]', '$_POST[DName]', '$_POST[Specialization]', '$_POST[DPhone]', '$_POST[DAddress]', '$_POST[DSalary]', '$_POST[HId]', '$_POST[DepId]');";
            
            if (!mysqli_query($conn, $query)) {
                die('Error: '.mysqli_error($conn));
              }
              echo("Record addded successfully!");
            
        ?>  

    <a href = "doclist.php"> Show Doctors List</a>

        </body>

</html>
