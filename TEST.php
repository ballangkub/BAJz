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

$textxx = "SELECT Name FROM botline";

$testxx = "SELECT Name FROM botline WHERE Name = '$textxx' ";
    
    echo $testxx;

/*$text = 'TESTXX';
$sql = "SELECT Name FROM botline WHERE Name = '$text' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo $text;
} else {
    echo "0 results";
}*/

$conn->close();

?>
