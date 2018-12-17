<?php
	session_start();
	mysql_connect("127.0.0.1","root","12345678");
	mysql_select_db("test");
	$strSQL = "INSERT INTO linebot (LineID,Message) VALUES ('".$_POST["txtlineid"]."' , '".$_POST["txtmessage"]."')";
	$objQuery = mysql_query($strSQL);
	if($objQuery)
	{
			echo "NICE LOGIN";
			header("Location:linebotapi.php");
	}
	else
	{
			echo "ERROR";
	}
	
	mysql_close();
?>
