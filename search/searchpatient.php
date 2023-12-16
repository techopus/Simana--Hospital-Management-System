<?php
include_once '../db_connect.php';
?>
<?php 
            $conn = mysqli_connect("localhost", "group27admin","GoodbyeCircle", "group27");
            if (mysqli_connect_errno()){
              echo "Failed to connect to MYSQL".mysqli_connect_error();
            }
      
            ?>
<?php
$sql = "SELECT * FROM Patient;";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "All-of Selection Failed!";
} else {
    // var_dump($result);
    $res = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $array_of_names = array();
   // $array_of_ids = array();

    foreach ($res as $r => $value) {
        array_push($array_of_names, $value["PName"]);
        //array_push($array_of_ids, $value["PId"]);
    }
   // print_r($array_of_ids);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Search</title>
    <link rel="stylesheet" href="../index.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
    <h1 class="feedback-header"> <u>Search Page</u></h1>
    <div style="display: flex;">
        <div style="margin-left: 20px; margin-right: 50px;">

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <input id="PatientName" type="text" name="PatientName" placeholder="Patient Name">
                <br>
                <input type="submit" value="Submit" />
                <button type="submit" name="submit">Search</button>
            </form>
        </div>


        <div>


<?php
    if (isset($_POST['submit'])) {
         // echo 'submit clicked';
        $term = $_POST["term"];
        $PName = $_POST['PatientName'];

        $sql = "SELECT PName,PId FROM group27.Patient WHERE PName LIKE '%$PName'";
        $result = mysqli_query($conn, $sql);

        // print_r($result);

         if ($result->num_rows > 0) {
            // echo 'table beloe';
            echo "<table>";
             while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['PName'] . "</td></tr>";
            }
        echo "</table>";
    }
}

?>
        </div>
        <script>
            // converting php arrays to javascript arrays
            var array_of_names = <?php echo json_encode($array_of_names); ?>;
            var array_of_descriptions = <?php echo json_encode($array_of_ids); ?>;
            $("#PatientName").autocomplete({
                source: array_of_names
            });
        </script>

</body>

</html>