<?php
$servername = "us-cdbr-iron-east-01.cleardb.net";
$username = "b1ab7271b69167";
$password = "f300f19a";
$dbname = "heroku_b577b61b9273cc5";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn,"SET NAMES'utf8'");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else { 
    echo "Connection Success"."<br>";
}

$test1 = $_POST["txtname"];
$test2 = '2';
$sql = "SELECT Name FROM botline WHERE Name = '$test1'";
$result = $conn->query($sql);
if ($result->num_rows = 0) {
    $sql2 = "INSERT INTO botline ( Name , UserID ) VALUES ('".$test1."' , '".$test2."')";
        if ($conn->query($sql2) === TRUE) {
            echo "New record created successfully";
  } else {
      echo "Error";
    } 
}


?>
