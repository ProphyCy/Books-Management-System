<?php
	$con = mysql_connect("localhost","root","12345");
	if (!$con)
	{
	  die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("my_db", $con);

	$cardNumber = $_GET['CardNumber'];
	$bookNumber = $_GET['BookNumber'];

	$searchBook = " 	
		select *
		from borrow
		where borrow.book_id = \"" .$bookNumber.
		"\"";
	$searchCard = "
		select *
		from card
		where card.card_number = \"" .$cardNumber.
		"\"";

	$query1 = mysql_query($searchBook);
	$count1 = 0;
	while($row = mysql_fetch_array($query1))
  	{
  		$count1 = $count1 + 1;
  	}

	$query2 = mysql_query($searchCard);
	$count2 = 0;
	while($row = mysql_fetch_array($query2))
  	{
  		$count2 = $count2 + 1;
  	}

	if ($count1 == 0) {
		echo "This book haven't been borrowed!";
		echo "<br />";
	}
	elseif ($count2 == 0) {
		echo "The card is nonexistent!";
		echo "<br />";
	}
	else {
		$returnBook = "
			delete from borrow 
			where book_id = \"" .$bookNumber. "\"
			";
		mysql_query($returnBook);
		echo "Returned this book successfully!";
	}
	echo "<br />"
?>

<html>
<body>
	<form action="0.php" method="get">
		<input type="submit" value="back">
	</form>
</body>
</html>