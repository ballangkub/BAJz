<?php

$servername = "us-cdbr-iron-east-01.cleardb.net";
$username = "b1ab7271b69167";
$password = "f300f19a";
$dbname = "heroku_b577b61b9273cc5";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else { 
   // echo "Connection Success";
}

$sql = "SELECT Number , UserID , Name FROM botline";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Number : " .$row["Number"]. " - UserID : " .$row["UserID"]. " - Name : " .$row["Name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
