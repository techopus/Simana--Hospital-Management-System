<?php 
    $conn = mysqli_connect("localhost", "group27admin","GoodbyeCircle", "group27");
        if (mysqli_connect_errno()){
        echo "Failed to connect to MYSQL".mysqli_connect_error();
    }
?>