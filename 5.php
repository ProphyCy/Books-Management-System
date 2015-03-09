<?php
	$con = mysql_connect("localhost","root","12345");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	else echo "<script>alert('Connected successfully!')</script>";
	// some code
	mysql_select_db("my_db", $con);
	
$filename = substr($_GET["textfield"],12);
require("/Library/WebServer/Documents/PHPExcel_1.8.0_doc/Classes/PHPExcel.php"); 

$fileType = PHPExcel_IOFactory::identify($filename); //文件名自动判断文件类型
$objReader = PHPExcel_IOFactory::createReader($fileType);
$objPHPExcel = $objReader->load($filename);
$currentSheet = $objPHPExcel->getSheet(0); //第一个工作簿
$allRow = $currentSheet->getHighestRow();

for ($x = 1; $x <= $allRow; $x++){
$book["book_id"] = "'".$currentSheet->getCell('A'.$x)->getValue()."'";
$book["kind"] = "'".$currentSheet->getCell('B'.$x)->getValue()."'";
$book["book_name"] = "'".$currentSheet->getCell('C'.$x)->getValue()."'";
$book["press"] = "'".$currentSheet->getCell('D'.$x)->getValue()."'";
$book["year"] = $currentSheet->getCell('E'.$x)->getValue();
$book["author"] = "'".$currentSheet->getCell('F'.$x)->getValue()."'";
$book["price"] = $currentSheet->getCell('G'.$x)->getValue();
$book["number"] = $currentSheet->getCell('H'.$x)->getValue();
$line1 = "(".$book["book_id"].",".$book["kind"].",".$book["book_name"].",".$book["press"].",".$book["year"].",".$book["author"].",".$book["price"].",".$book["number"].",".$book["number"].")";
//echo $line1;
/*
	$book=array("book_id"=>"","kind"=>"","book_name"=>"","press"=>"","year"=>"","author"=>"","price"=>"","number"=>"");
	
for ($x = 0; $x<$len; $x++){
	if ($line[$x] == ',')
	break;
}
	$first = $x;
	$book["book_id"] = "'".substr($line,3,$first-3)."'";
	$first = $first+2;
for ($x = $first; $x<$len;$x++){
	if($line[$x] == ',')
	break;
}
	$end = $x;
	$book["kind"] = "'".substr($line,$first,$end-$first)."'";
	$first = $end +2;
for ($x = $first; $x<$len;$x++){
	if($line[$x] == ',')
	break;
}
	$end = $x;
	$book["book_name"] = "'".substr($line,$first,$end-$first)."'";
	$first = $end +2;
for ($x = $first; $x<$len;$x++){
	if($line[$x] == ',')
	break;
}
	$end = $x;
	$book["press"] = "'".substr($line,$first,$end-$first)."'";
	$first = $end +2;	
for ($x = $first; $x<$len;$x++){
	if($line[$x] == ',')
	break;
}
	$end = $x;
	$book["year"] = substr($line,$first,$end-$first);
	$first = $end +2;	
for ($x = $first; $x<$len;$x++){
	if($line[$x] == ',')
	break;
}
	$end = $x;
	$book["author"] = "'".substr($line,$first,$end-$first)."'";
	$first = $end +2;	
for ($x = $first; $x<$len;$x++){
	if($line[$x] == ',')
	break;
}
	$end = $x;
	$book["price"] = substr($line,$first,$end-$first);
	$first = $end +2;
for ($x = $first; $x<$len;$x++){
	if($line[$x] == ' ')
	break;
}
	$end = $x;
	$book["number"] = substr($line,$first,$end-$first);
	$first = $end +2;
	echo $book["book_id"];
	echo $book["kind"];
	echo $book["book_name"];
	echo $book["press"];
	echo $book["year"];
	echo $book["author"];
	echo $book["price"];
	echo $book["number"];	
	$line1 = "(".$book["book_id"].",".$book["kind"].",".$book["book_name"].",".$book["press"].",".$book["year"].",".$book["author"].",".$book["price"].",".$book["number"].",".$book["number"].")";
	//echo $line1;
//	echo $x2;

*/	
	
	$res = mysql_query("select * 
						from book 
						where book_id = ".$book["book_id"]);
	$y=mysql_num_rows($res);
 	if ($y>0){
 	//echo "fuck!";
		mysql_query("update book set stock = stock +".$book["number"].",total = total+".$book["number"]." where book_id=".$book["book_id"]);
	}
	else {
	//echo "yes!";
		mysql_query("Insert into book values".$line1);
	}
}	
	//$rc = mysql_affected_rows();
	//echo "Records inserted: ".$rc;



$result = mysql_query("SELECT * FROM book");

while($row = mysql_fetch_array($result))
  {
  echo $row['book_id'] . " " . $row['stock'];
  echo "<br />";
  }

?>

<html>
	<body>
	<form action="0.php" method="get">
	return to the previous website<br>
	<input type="submit">
	<body>
	<html>