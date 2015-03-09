<?php
	$con = mysql_connect("localhost","root","12345");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	//else echo "<script>alert('Connected successfully!')</script>";
	// some code
	mysql_select_db("my_db", $con);
	
	$sql = "delete from book";
	mysql_query($sql);
	$sql = "delete from borrow";
	mysql_query($sql);
	$sql = "delete from card";
	mysql_query($sql);
	echo "<script>alert('clear successful!')</script>";
		echo "<script language=\"javascript\">";
		echo "document.location=\"admin.php\"";
		echo "</script>";
?>
	
