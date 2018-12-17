<?php

$servername = "us-cdbr-iron-east-01.cleardb.net";
$username = "b1ab7271b69167";
$password = "f300f19a";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$txt1 = "SELECT LineID FROM details ";

$txt2 = "SELECT Message FROM details ";

require "vendor/autoload.php";

$access_token = '6Fkcia04Z6b5eNyPFvCTM98VKSofDCm3zr8tX1XrbPSdMBCCCDhNhxXiJTP3wIjZT2Jj+EZ0Cr58AFhw1ZcSus9kH/gpj+N5N3kQZzkOJb3aM6wm4R5oWjt4o6kJsqsjCPDldpOY4L6/+QRmzgqYbwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'cb35ef400aeeb1531a9c836e5d3e72ed';

$pushID = $txt1;

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($txt2);
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







