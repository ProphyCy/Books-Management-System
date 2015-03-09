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
		where book_id = \"" .$bookNumber. "\" 
		and card_number = \"" .$cardNumber.
		"\"";
	$searchCard = "
		select *
		from card
		where card.card_number = \"" .$cardNumber.
		"\"";

	$queryBook = mysql_query($searchBook);

	$countBook = -1;
	$maxBorrowNumber = "0";
	while($row = mysql_fetch_array($queryBook))
  	{
  		if ($countBook == -1) {
  			$countBook = 0;
  		}
  		if ($row["return_date"] == "0000-00-00") {
  			$countBook = $countBook + 1;
  			if ($maxBorrowNumber < $row["borrow_number"]) {
  				$maxBorrowNumber = $row["borrow_number"];
  			}
  		}
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
	elseif ($countBook == -1) {
		echo "<script>alert('No borrow record!')</script>";
		echo "<script language=\"javascript\">";
		echo "document.location=\"admin.php\"";
		echo "</script>";
	}
	elseif ($countBook == 0) {
		echo "<script>alert('This book has already returned!')</script>";
		echo "<script language=\"javascript\">";
		echo "document.location=\"admin.php\"";
		echo "</script>";
	}
	else {
		echo $maxBorrowNumber;
		$updateRecord = "
			update borrow
			set return_date = " .date("Ymd"). " 
			where book_id = \"" .$bookNumber. "\" 
			and card_number = \"" .$cardNumber. "\" 
			and borrow_number = \"" .$maxBorrowNumber. "\" 
			";
		mysql_query($updateRecord);

		$returnBook = "
			update book set stock = stock + 1
			where book_id = \"" .$bookNumber. "\"
		";
		mysql_query($returnBook);
		echo "<script>alert('Returned this book successfully!')</script>";
		echo "<script language=\"javascript\">";
		echo "document.location=\"admin.php\"";
		echo "</script>";
	}
?>