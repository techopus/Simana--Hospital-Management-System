kgautam@clabsql:~/public_html> cat med.php
<html>
    <head>
        <title> "Medicine Input Results" </title>
    </head>
    <body>
      <?php 
        $conn = mysqli_connect("localhost", "group27admin","GoodbyeCircle", "group27");
            if (mysqli_connect_errno()){
              echo "Failed to connect to MYSQL".mysqli_connect_error();
            }
      ?>

      <?php
    
            $sql = "SELECT* FROM Medicine;";
            $result = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($result) + 1;
            $query = "INSERT INTO Medicine (MId, MName, MType) 
                VALUES( '$_POST[MId]','$_POST[MName]','$_POST[MType]');";
                if (!mysqli_query($conn, $query)) {
                  die('Error: '.mysqli_error($conn));
                }
                echo("Record addded successfully!");
                  
                 

      ?>  

               
        <a href = "medlist.php"> Show Medicine List </a>
       
     
   </body>
  </html>