<?php
	$url = parse_url(getenv("us-cdbr-iron-east-01.cleardb.net"));

	$server = $url["us-cdbr-iron-east-01.cleardb.net"];
	$username = $url["b1ab7271b69167"];
	$password = $url["f300f19a"];
	$db = substr($url["heroku_b577b61b9273cc5"], 1);

	$conn = new mysqli($server, $username, $password, $db);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
} else { 
	echo "Connected Successfully";
}

	$sql = "INSERT INTO 'heroku_b577b61b9273cc5'.'details' (LineID , Message) VALUES ('TET', 'TEST')";
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
	} else { 
      	echo "Error : " . $conn ;
}
	mysqli_close($conn);

?>
