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
    echo "Connection Success";
}

$test1 = $_POST["txtname"];
$test2 = $_POST["txtmessage"];

$sql = "SELECT Name FROM botline WHERE Name = '$test1'";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo "Name : " .$row["Name"]."<br>";
        $push = $row["Name"];
    }
} else {
    echo "0 results";
}
/*$sql = "INSERT INTO details ( LineID , Message) VALUES ('".$_POST["txtlineid"]."' , '".$_POST["txtmessage"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} */

require "vendor/autoload.php";

$access_token = '6Fkcia04Z6b5eNyPFvCTM98VKSofDCm3zr8tX1XrbPSdMBCCCDhNhxXiJTP3wIjZT2Jj+EZ0Cr58AFhw1ZcSus9kH/gpj+N5N3kQZzkOJb3aM6wm4R5oWjt4o6kJsqsjCPDldpOY4L6/+QRmzgqYbwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'cb35ef400aeeb1531a9c836e5d3e72ed';

$pushID = $push;

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($test2);
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
?>
