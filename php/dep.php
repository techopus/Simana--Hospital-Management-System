<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <title>Add Department</title>
  </head>


     <body>
          <?php 
            $conn = mysqli_connect("localhost", "group27admin","GoodbyeCircle", "group27");
            if (mysqli_connect_errno()){
             echo "Failed to connect to MYSQL".mysqli_connect_error();
              }
          ?>
          <?php

            $sql = "SELECT* FROM Department;";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result) + 1;
            $query = "INSERT INTO Department (DepId, DepName, HId) 
                VALUES( '$_POST[DepId]','$_POST[DepName]', '$_POST[HId]');";
                  if (!mysqli_query($conn, $query)) {
                    die('Error: '.mysqli_error($conn));
                  }
                  echo("Record addded successfully!");
                 

          ?>  

               
        <a href = "deplist.php"> Show Bill List </a>
       
     
    <body>

</html>