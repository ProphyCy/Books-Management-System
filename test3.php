<?php
	$con = mysql_connect("localhost","root","12345");
	if (!$con)
	{
	  die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("my_db", $con);
	$searchCard = " 	
		select *
		from card ";	
	$count = 0;
    $admin = mysql_query($searchCard);
	while($row = mysql_fetch_array($admin))
	{
	$count = $count + 1;
	echo $row['card_number'];
	echo " ";
	echo $row['name'];
	echo " ";
	echo $row['department'];
	echo " ";
	echo $row['password'];
		echo "<br />"; 
	}

	echo "---"; 
	$searchbook = " 	
		select *
		from book ";	
	$count = 0;
    $admin = mysql_query($searchbook);
	while($row = mysql_fetch_array($admin))
	{
	$count = $count + 1;
	echo $row['book_id'];
	echo " ";
	echo $row['book_name'];
	echo " ";
	echo $row['stock'];
	echo " ";
	echo $row['total'];
		echo "<br />";
	}
	echo "---"; 
	$searchborrow = " 	
		select *
		from borrow ";	
	$count = 0;
    $admin = mysql_query($searchborrow);
	while($row = mysql_fetch_array($admin))
	{
	$count = $count + 1;
	echo $row['borrow_number'];
	echo " ";
	echo $row['book_id'];
	echo " ";
	echo $row['card_number'];
	echo " ";
	echo $row['borrow_date'];
	echo " ";
	echo $row['return_date'];
	echo "<br />";
	}
?>