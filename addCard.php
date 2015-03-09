<?php
	$con = mysql_connect("localhost","root","12345");
	if (!$con)
	{
	  die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("my_db", $con);

	$cardNumber = $_GET['CardNumber'];
	$name 		= $_GET['Name'];
	$department = $_GET['Department'];
	$password 	= $_GET['Password'];

	$searchCard = "
		select *
		from card
		where card.card_number = \"" .$cardNumber.
		"\"";

	$query = mysql_query($searchCard);
	$countCard = 0;
	while($row = mysql_fetch_array($query))
  	{
  		$countCard = $countCard + 1;
  	}

  	if ($countCard > 0) {
  		echo "<script>alert('Pre-existing card number!')</script>";
		echo "<script language=\"javascript\">";
		echo "document.location=\"admin.php\"";
		echo "</script>";
  	}
  	else {
  		$sqlQuery = " 	
			insert into card
			values (\"" .$cardNumber. "\", \"" .$name. "\", \"" .$department. "\", \"" .$password. "\")
		";
		//echo $sqlQuery;
		$query = mysql_query($sqlQuery);
		//echo $query;
		echo "<script>alert('Create card successfully!')</script>";
		echo "<script language=\"javascript\">";
		echo "document.location=\"admin.php\"";
		echo "</script>";
  	}
?>