<html>
    <head>
        <title> "Hospital Input Results" </title>
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
            $query = "INSERT INTO Bill ('HId', 'HName', 'HType', 'HAddress') VALUES( '$_POST[HId]','$_POST[HName]', '$_POST[HType]', '$_POST[HAddress]');";
                  
                 

      ?>  

               
        <a href = "hospitallist.php"> Show Bill List </a>
       
     
   </body>
  </html>