<?
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
   // echo "Connection Success";
}


$text = "TESTXX";
$sql = "SELECT Name FROM botline WHERE Name = '$text'";
$result = mysql_query($sql);
while($show = mysql_fetch_object($result)){
	echo 'TEST';
}

/*if ($result->num_rows > 0) {
    echo $text;
} else {
    echo "0 results";
}*/

$conn->close();

?>
