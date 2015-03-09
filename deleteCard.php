<?php
	$con = mysql_connect("localhost","root","12345");
	if (!$con)
	{
	  die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("my_db", $con);

	$cardNumber = $_GET['CardNumber'];

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

  	$searchBorrow = "
  		select *
  		from borrow
  		where card_number = \"" .$cardNumber.
		"\" and return_date = '0000-00-00' 
  	";
  	$queryBorrow = mysql_query($searchBorrow);
  	$countBorrow = 0;
	while($row = mysql_fetch_array($queryBorrow))
  	{
  		$countBorrow = $countBorrow + 1;
  	}

  	if ($countCard == 0) {
  		echo "<script>alert('Nonexistant card!')</script>";
		echo "<script language=\"javascript\">";
		echo "document.location=\"admin.php\"";
		echo "</script>";
  	}
  	elseif ($countBorrow != 0)
  	{
  		echo "<script>alert('Unreturned book!')</script>";
		echo "<script language=\"javascript\">";
		echo "document.location=\"admin.php\"";
		echo "</script>";
  	}
  	else {
  		$sqlQuery = " 	
			delete
			from card
			where card.card_Number = \"" .$cardNumber. "\"
		";
		//echo $sqlQuery;
		$query = mysql_query($sqlQuery);
		//echo $query;
		echo "<script>alert('Delete card successfully!')</script>";
		echo "<script language=\"javascript\">";
		echo "document.location=\"admin.php\"";
		echo "</script>";
  	}
?>
