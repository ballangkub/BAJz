<?php
$servername = "us-cdbr-iron-east-01.cleardb.net";
$username = "b1ab7271b69167aa";
$password = "f300f19aaa";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
