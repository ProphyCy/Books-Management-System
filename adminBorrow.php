<?php
	$con = mysql_connect("localhost","root","12345");
	if (!$con)
	{
	  die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("my_db", $con);
	$cardNumber = $_GET['CardNumber'];
	$bookNumber = $_GET['BookNumber'];
	$borrowDate = date("Ymd");
	$searchBook = " 	
		select *
		from book
		where book_id = \"" .$bookNumber.
		"\"";
	$searchCard = "
		select *
		from card
		where card.card_number = \"" .$cardNumber.
		"\"";

	$queryStock = mysql_query($searchBook);
	$countStock = 0;
	while($row = mysql_fetch_array($queryStock))
  	{
  		$countStock = $row['stock'];
  	}

	$queryCard = mysql_query($searchCard);
	$countCard = 0;
	while($row = mysql_fetch_array($queryCard))
  	{
  		$countCard = $countCard + 1;
  	}

	if ($countCard == 0) {
		echo "<script>alert('The card is nonexistent!')</script>";
		echo "<script language=\"javascript\">";
		echo "document.location=\"admin.php\"";
		echo "</script>";
	}
	elseif ($countStock == 0) {
		echo "<script>alert('This book has no stock now!')</script>";
		echo "<script language=\"javascript\">";
		echo "document.location=\"admin.php\"";
		echo "</script>";
	}
	else {
		$updateBook = "
			update book
			set stock = stock - 1
			where book_id = \"" .$bookNumber. 
		"\"";
		mysql_query($updateBook);

		$searchBorrow = "
			select *
			from borrow
		";
		$queryBorrow = mysql_query($searchBorrow);
		$countBorrow = 1;
		while($row = mysql_fetch_array($queryBorrow))
	  	{
	  		$countBorrow = $countBorrow + 1;
	  	}

		$borrowBook = "
			insert into borrow 
			values (\"" .$countBorrow. "\", \"" .$bookNumber. "\", \"" .$cardNumber. "\", " .$borrowDate. "
			, 0)";
		//echo $borrowBook;
		mysql_query($borrowBook);
		echo "<script>alert('Borrowed this book successfully!')</script>";
		echo "<script language=\"javascript\">";
		echo "document.location=\"admin.php\"";
		echo "</script>";
	}
?>
