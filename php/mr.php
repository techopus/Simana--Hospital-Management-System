<html>
    <head>
        <title> "Report Input Results" </title>
    </head>
    <body>
        <?php 
            $conn = mysqli_connect("localhost", "group27admin","GoodbyeCircle", "group27");
            if (mysqli_connect_errno()){
              echo "Failed to connect to MYSQL".mysqli_connect_error();
            }
      
            ?>
         <?php
            $sql = "SELECT* FROM MedicalRecord;";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result) + 1;
            $query = "INSERT INTO MedicalRecord (RId, AdmitDate, IReport,FReport,PId,DId) 
                VALUES( '$_POST[RId]','$_POST[AdmitDate]', '$_POST[IReport]', '$_POST[FReport]', '$_POST[PId]', '$_POST[DId]');";
                  if (!mysqli_query($conn, $query)) {
                    die('Error: '.mysqli_error($conn));
                }
                
                  echo("Record addded successfully!");
                 
        ?>  

               
        <a href = "mrlist.php"> Show Report List </a>
       
     
   </body>
</html>