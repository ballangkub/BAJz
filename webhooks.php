<?php // callback.php

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

/*
 $sql = "INSERT INTO details ( LineID ) VALUES ('".$arrJson['events'][0]['source']['userId']."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 

*/

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$strAccessToken = '6Fkcia04Z6b5eNyPFvCTM98VKSofDCm3zr8tX1XrbPSdMBCCCDhNhxXiJTP3wIjZT2Jj+EZ0Cr58AFhw1ZcSus9kH/gpj+N5N3kQZzkOJb3aM6wm4R5oWjt4o6kJsqsjCPDldpOY4L6/+QRmzgqYbwdB04t89/1O/w1cDnyilFU=';

$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";

$numberstu = $arrJson['events'][0]['message']['text'];

$sql2 = "SELECT Name FROM botline";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
        echo "Name : " .$row2["Name"]."<br>";
        $gggg = $row2["Name"];
} else {
    echo "0 results";
}


echo $gggg;

if($arrJson['events'][0]['message']['text'] == $gggg) {
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $text = $arrJson['events'][0]['message']['text'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เรียบร้อย";
  $idcode = $arrJson['events'][0]['source']['userId'];
  $sql5 = "UPDATE botline SET UserID = '$idcode' WHERE Name = '$gggg'"; 
    if(mysqli_query($conn, $sql5)){ 
        echo "Record was updated successfully."; 
}   else { 
        echo "ERROR: Could not able to execute";
}  
  //$nameline = $text;
} else {
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $text = $arrJson['events'][0]['message']['text'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "บอทรับทราบบ";
  $idcode = $arrJson['events'][0]['source']['userId'];
  $nameline = $text;
}


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);

/*
$sql = "INSERT INTO botline (UserID , Name) VALUES ( '$idcode' , '$nameline' )";
if ($conn->query($sql) === TRUE) {
    echo "Success ADD";
} else  {
    echo "Error";
} */


?>
