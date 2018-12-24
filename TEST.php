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

$sql = "SELECT Name FROM botline";
$result = mysqli_query($conn,$query);

if ($test = mysqli_fetch_array($result){
    echo $test["Name"];
}
/*$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo $text;
} else {
    echo "0 results";
}*/

$conn->close();

?>
