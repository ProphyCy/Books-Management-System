<?php
	$con = mysql_connect("localhost","root","12345");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	// some code

  mysql_select_db("my_db", $con);
	$create_book = "CREATE TABLE book 
	(
		book_id  varchar(20),
		kind varchar(20),
		book_name varchar(40),
		press varchar(40),
		year int,
		author varchar(20),
		price double(8,2),
		total int,
		stock int,
		PRIMARY KEY (book_id)
	)";
	mysql_query($create_book);
	$create_card = " CREATE TABLE card
	(
		card_number varchar(20),
		name varchar(20),
		department varchar(50),
		password varchar(10),
		PRIMARY KEY (card_number)
	)";
	mysql_query($create_card);

	$create_borrow = " CREATE TABLE borrow
	(
		borrow_number varchar(20),
		book_id varchar(20),
		card_number varchar(20),
		borrow_date date,
		return_date date,
		PRIMARY KEY (borrow_number),
		FOREIGN KEY (book_id) REFERENCES book(book_id),
		FOREIGN KEY (card_number) REFERENCES card(card_number)
	)";
	mysql_query($create_borrow);
?>
<html>
<head>
	<style type="text/css">
	</style>
</head>

<body>

<h1 align="center">
	Library Database
</h1>
<!--
<style>
.file-box{position:relative;width:340px} 
.txt{position:absolute; top:6px; right:-240px; height:22px; border:1px solid #cdcdcd; width:180px;} 
.btn{position:absolute; top:6px; right:-430px; background-color:#FFF; border:1px solid #CDCDCD;height:24px; width:70px;} 
.file{position:absolute; top:10px; right:-500px; height:60px; filter:alpha(opacity:1);opacity: 1;width:260px }
--!>
</style> 
<div class="file-box"> 
<form action="1.php" method="get" name = "frm1" > 
<table align="center">
<tr>
	<td>
		<input type='text' name='textfield' id='textfield' class='txt' /> 
	</td>
	<td>
		<input type='button' class='button' value='open' />
		<input type="file" name="fileField" class="file" id="fileField" size="28" onchange="document.getElementById('textfield').value=this.value" /> 
	</td>
	<td>
		<input type="submit" name="submit" class="button" value="submit" />
	</td>
</tr>
</table>
</form> 
</div>

<form action="1.php" method="get" class ="form">
<table align="center">
	<caption> Open File </caption>
	<tr>
		<td> file name: </td>
		<td> <input type="text" name="file"> </td>
	</tr>
	<tr>
		<td></td>
		<td> <input type="submit"> </td>
	</tr>
</table>
</form>

<form action="2.php" method="get">
<table align="center">
	<caption> Query </caption>
	<tr>
		<td> year start: </td>
		<td> <input type="text" name="yearstart"> </td>
	</tr>
	<tr>
		<td> year end:	</td>
		<td> <input type="text" name="yearend"> </td>
	</tr>
	<tr>
		<td> author name:	</td>
		<td> <input type="text" name="authorname"> </td>
	</tr>
	<tr>
		<td> press:	</td>
		<td> <input type="text" name="press"> </td>
	</tr>
	<tr>
		<td> kind:	</td>
		<td> <input type="text" name="kind"> </td>
	</tr>
	<tr>
		<td> bookname:	</td>
		<td> <input type="text" name="bookname"> </td>
	</tr>
	<tr>
		<td> price from: </td>
		<td> <input type="text" name="pricefrom"> </td>
	</tr>
	<tr>
		<td> price end: </td>	
		<td> <input type="text" name="priceend"> </td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit"></td>
	</tr>
</table>
</form>

<form action="showCard.php" method="get" />
<table align="center">
	<caption>Show Card Info:</caption>
	<tr>
		<td> Card Number: </td> 
		<td> <input type = "text" name = "CardNumber" /> </td>
	</tr>
	<tr>
		<td></td>
		<td> <input type="submit"/> </td>
	</tr>
</table>
</form>

<form action="borrow.php" method="get">
<table align="center">
	<caption> Borrow Books: </caption>
	<tr>
		<td> Card Number: </td>
		<td> <input type = "text" name = "CardNumber" /> </td>
	</tr>
	<tr>
		<td> Book Number: </td>
		<td> <input type = "text" name = "BookNumber" /> </td>
	</tr>
	<tr>
		<td> Borrow Number: </td>
		<td> <input type = "text" name = "BorrowNumber" /> </td>
	</tr>
	<tr>
		<td> Borrow Date: </td>
		<td> <input type = "text" name = "BorrowDate" /> </td>
	</tr>
	<tr>
		<td></td>
		<td> <input type="submit" /> </td>
	</tr>
</table>
</form>

<form action="return.php" method="get">
<table align="center">
	<caption> Return Books: </caption>
	<tr>
		<td> Card Number: </td>
		<td> <input type = "text" name = "CardNumber" /> </td>
	</tr>
	<tr>
		<td> Book Number: </td>
		<td> <input type = "text" name = "BookNumber" /> </td>
	</tr>
	<tr>
		<td></td>
		<td> <input type="submit" /> </td>
	</tr>
</table>
</form>

<form action="addCard.php" method="get">
<table align="center">
	<caption> Add Card: </caption>
	<tr>
		<td> Card Number: </td>
		<td> <input type = "text" name = "CardNumber" /> </td>
	</tr>
	<tr>
		<td> Name: </td>
		<td> <input type = "text" name = "Name" /> </td>
	</tr>
	<tr>
		<td> Department: </td>
		<td> <input type = "text" name = "Department" /> </td>
	</tr>
	<tr>
		<td> Kind: </td>
		<td> <input type = "text" name = "kind" /> </td>
	</tr>
	<tr>
		<td></td>
		<td> <input type="submit" /> </td>
	</tr>
</table>
</form>

<form action="deleteCard.php" method="get">
<table align="center">
	<caption> Delete Card: </caption>
	<tr>
		<td> Card Number: </td>
		<td> <input type = "text" name = "CardNumber" /> </td>
	</tr>
	<tr>
		<td></td>
		<td> <input type="submit" /> </td>
	</tr>
</table>
</form>

<form action="3.php" method="get">
<table align="center">
	<tr>
		<td> Clear Data </td>
		<td> <input type="submit" /> </td>
	</tr>
</table>
</form>

</body>
</html>
