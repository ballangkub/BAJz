<?php
	session_start();
	mysql_connect("heroku_b577b61b9273cc5","b1ab7271b69167","f300f19a");
	mysql_select_db("heroku_b577b61b9273cc5");
	$strSQL = "INSERT INTO `heroku_b577b61b9273cc5` (LineID,Message) VALUES ('".$_POST["txtlineid"]."' , '".$_POST["txtmessage"]."')";
	$objQuery = mysql_query($strSQL);
	if($objQuery)
	{
			echo "NICE LOGIN";
			
	}
	else
	{
			echo "ERROR";
		header("Location:linebotapi.php");
	}
	
	mysql_close();
?>
