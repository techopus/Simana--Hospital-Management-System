<html>
    <head>
        <title> "Bill Input Results" </title>
    </head>
    <body>
      <?php 
        $conn = mysqli_connect("localhost", "group27admin","GoodbyeCircle", "group27");
            if (mysqli_connect_errno()){
              echo "Failed to connect to MYSQL".mysqli_connect_error();
            }
      
    
            $sql = "SELECT* FROM Bill;";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result) + 1;
            $query = "INSERT INTO Bill (BId, PId, DoctorCharge,TestType,TestCharge, Roomcharge, Miscellaneous, Total) 
                VALUES( '$_POST[BId]','$_POST[PId]', '$_POST[DoctorCharge]', '$_POST[TestType]', '$_POST[TestCharge]', '$_POST[RoomCharge]', '$_POST[Miscellaneous]', '$_POST[Total]');";
                  if (!mysqli_query($conn, $query)) {
                    die('Error: '.mysqli_error($conn));
                  }
                  echo("Record addded successfully!");
                 

      ?>  

               
        <a href = "billlist.php"> Show Bill List </a>
       
     
   </body>
</html>