<style>
.clearfix{ #zoom:1;}
.clearfix:after{ content:' '; display:block; height:0; clear:both; color:#fff;}
.breathe-btn{ position:relative; width:400px; height:35px; 
  margin:40px auto; line-height:40px; b
   order:1px solid #2b92d4; 
    color:#494949; 
   font-size:20px; text-align:center; 
   cursor:pointer; box-shadow:0 1px 2px rgba(0,0,0,.3); 
   overflow:hidden; 
   background-image: -webkit-gradient(linear, left top, left bottom, from(#292929), to(#e74c3c));
    -webkit-animation-timing-function: ease-in-out;
    -webkit-animation-name: breathe;
    -webkit-animation-duration: 4000ms;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-direction: alternate;
}
.breathe-btn2{ position:relative; width:300px; height:35px; 
  margin:40px auto; line-height:40px; b
   order:1px solid #2b92d4; 
    color:#494949; 
   font-size:20px; text-align:center; 
   cursor:pointer; box-shadow:0 1px 2px rgba(0,0,0,.3); 
   overflow:hidden; 
   background-image: -webkit-gradient(linear, left top, left bottom, from(#292929), to(#e74c3c));
    -webkit-animation-timing-function: ease-in-out;
    -webkit-animation-name: breathe;
    -webkit-animation-duration: 4000ms;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-direction: alternate;
}
@-webkit-keyframes breathe {
    0% { opacity: .2; box-shadow:0 1px 2px rgba(255,255,255,0.1);}
    100% { opacity: 1; border:1px solid rgba(59,235,235,1); box-shadow:0 1px 30px rgba(59,255,255,0.3);}
}
body {
  background: #292929;
  color: white;
  font-family: 'Roboto';
}
.flat-form_q {
  background: #e74c3c;
  margin: 25px auto;
  width: 400px;
  height: 1600px;
  position: relative;
  font-family: 'Roboto';
}
.flat-form_b {
  background: #e74c3c;
  margin: 25px auto;
  width: 390px;
  height: 340px;
  position: relative;
  font-family: 'Roboto';
}
.flat-form_c {
  background: #e74c3c;
  margin: 25px auto;
  width: 390px;
  height: 340px;
  position: relative;
  font-family: 'Roboto';
}
.tabs {
  background: #c0392b;
  height: 40px;
  margin: 0;
  padding: 0;
  list-style-type: none;
  width: 100%;
  position: relative;
  display: block;
  margin-bottom: 20px;
}
ul{background:#C31B0D;
  padding-left: 20px;
  padding-bottom: 10px;
  padding-right: 10px;
  padding-top: 10px;
   -webkit-transition: all ease .3s;  
    transition: all ease .3s 
}
ul:hover{
-webkit-transform: scale(1.05);  
    transform: scale(1.05);  
    box-shadow: 0px 0px 18px rgba(0,0,0,.5);
}
.tabs li {
  display: block;
  height 15px;
  float: left;
  margin: 0;
  padding: 0;
}
.tabs a {
  background: #c0392b;
  display: block;
  float: left;
  text-decoration: none;
  color: white;
  font-size: 16px;
  padding: 15px 25px 15px 27px;
  /*border-right: 1px solid @tab-border;*/
}
.tabs li:last-child a {
  border-right: none;
  width: 174px;
  padding-left: 0;
  padding-right: 0;
  text-align: center;
}

.tabs a.active {
  background: #e74c3c;
  border-right: none;
  -webkit-transition: all 0.5s linear;
  -moz-transition: all 0.5s linear;
  transition: all 0.5s linear;
}
.form-action {
  padding: 0 20px;
  position: relative;
}

.form-action h1 {
  font-size: 42px;
  padding-bottom: 10px;
}
.form-action p {
  font-size: 12px;
  padding-bottom: 10px;
  line-height: 25px;
}
form {
  padding-right: 20px !important;
}
form input[type=text],
form input[type=password],
form input[type=submit] {
  font-family: 'Roboto';
}

form input[type=text],
form input[type=password] {
  width: 35%;
  height: 30px;
  margin-bottom: 10px;
  padding-left: 15px;
  background: #fff;
  border: none;
  color: #e74c3c;
  outline: none;
}

form input[type=text_long] {
  width: 95%;
  height: 30px;
  margin-bottom: 10px;
  padding-left: 15px;
  background: #fff;
  border: none;
  color: #e74c3c;
  outline: none;
}
.dark-box {
  background: #5e0400;
  box-shadow: 1px 3px 3px #3d0100 inset;
  height: 40px;
  width: 50px;
}
.form-action .dark-box.bottom {
  position: absolute;
  right: 0;
  bottom: -24px;
}
.tabs + .dark-box.top {
  position: absolute;
  right: 0;
  top: 0px;
}
.show {
  display: block;
}
.hide {
  display: none;
}

.button {
    position:absolute;
    top: 50px; 
    right:50px; 
    border: none;
    display: block;
    background: #136899;
    height: 40px;
    width: 70px;
    color: #ffffff;
    text-align: center;
    border-radius: 5px;
    /*box-shadow: 0px 3px 1px #2075aa;*/
    -webkit-transition: all 0.15s linear;
    -moz-transition: all 0.15s linear;
    transition: all 0.15s linear;
}

.button:hover {
  background: #1e75aa;
  /*box-shadow: 0 3px 1px #237bb2;*/
}

.button:active {
  background: #136899;
  /*box-shadow: 0 3px 1px #0f608c;*/
}

::-webkit-input-placeholder {
  color: #e74c3c;
}
:-moz-placeholder {
  /* Firefox 18- */
  color: #e74c3c;
}
::-moz-placeholder {
  /* Firefox 19+ */
  color: #e74c3c;
}
:-ms-input-placeholder {
  color: #e74c3c;
}
</style>

<?php

$con = mysql_connect("localhost","root","12345");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	else echo "<script>alert('searched successfully!')</script>";
	// some code
	mysql_select_db("my_db", $con);
	$url = $_SERVER['REQUEST_URI'];
$p = 1;
if ($_GET["orderby"] == "")
	$order = " order by book_name";
else $order = " order by ".$_GET["orderby"];
$x = $_GET["yearstart"];
$y = $_GET["yearend"];
	$sql = "select * 
				from book
				where year between ".$x." and ".$y.$order;
	$result= mysql_query($sql);
  echo "<h1 align=\"center\">
          Library Database
        </h1>
          <div class=\"container\">
            <div class=\"flat-form_q\">";
              
              echo "<div class = \"breathe-btn\"> The books serached</div>";
	while($row = mysql_fetch_array($result))
  {   
  echo "<div id = \"login\" class=\"form-action show\">";
 
  echo "<form action=\"userborrow.php\" method=\"get\">";
 
  echo "<ul>";
  
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">NO.";
  echo $p."</li>";
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">Book Number:</li>";
  echo $row['book_id'];
  $book_id_now = $row['book_id']; 
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">Book Name:</li>";
  echo $row['book_name'];
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">Numbers In stock:</li>";
  echo $row['stock'];
  $CardNumber = $_GET['CardNumber'];
  echo "<input type = \"hidden\" name = \"CardNumber\" value = $CardNumber \>";
  echo "<input type = \"hidden\" name = \"BookNumber\" value = $book_id_now \>";
  echo "<input type = \"hidden\" name = \"url\" value = $url \>";
  echo "<input style = \"font-size :13px; \" type=\"submit\" value = \"borrow it\" class = \"button\">";
  echo "</ul>";
  echo "</form>";
  echo "</div>";
  $p++;
  if ($p>50) break;
  }
 
$x = $_GET["pricefrom"];
$y = $_GET["priceend"];
	$sql = "select * 
				from book
				where price between ".$x." and ".$y.$order;
	$result= mysql_query($sql);
	while($row = mysql_fetch_array($result))
  {
    echo "<div id = \"login\" class=\"form-action show\">";
 
  echo "<form action=\"userborrow.php\" method=\"get\">";
 
  echo "<ul>";
  
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">NO.";
  echo $p."</li>";
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">Book Number:</li>";
  echo $row['book_id'];
  $book_id_now = $row['book_id']; 
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">Book Name:</li>";
  echo $row['book_name'];
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">Numbers In stock:</li>";
  echo $row['stock'];
  $CardNumber = $_GET['CardNumber'];
  echo "<input type = \"hidden\" name = \"CardNumber\" value = $CardNumber \>";
  echo "<input type = \"hidden\" name = \"BookNumber\" value = $book_id_now \>";
  echo "<input type = \"hidden\" name = \"url\" value = $url \>";
  echo "<input style = \"font-size :13px; \" type=\"submit\" value = \"borrow it\" class = \"button\">";
  echo "</ul>";
  echo "</form>";
  echo "</div>";
  $p++;
  if ($p>50) break;
  }

$y = "'".$_GET["bookname"]."'";
	$sql = "select * 
				from book
				where book_name = ".$y.$order;
	$result= mysql_query($sql);
	while($row = mysql_fetch_array($result))
  {
     echo "<div id = \"login\" class=\"form-action show\">";
 
  echo "<form action=\"userborrow.php\" method=\"get\">";
 
  echo "<ul>";
  
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">NO.";
  echo $p."</li>";
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">Book Number:</li>";
  echo $row['book_id'];
  $book_id_now = $row['book_id']; 
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">Book Name:</li>";
  echo $row['book_name'];
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">Numbers In stock:</li>";
  echo $row['stock'];
  $CardNumber = $_GET['CardNumber'];
  echo "<input type = \"hidden\" name = \"CardNumber\" value = $CardNumber \>";
  echo "<input type = \"hidden\" name = \"BookNumber\" value = $book_id_now \>";
  echo "<input type = \"hidden\" name = \"url\" value = $url \>";
  echo "<input style = \"font-size :13px; \" type=\"submit\" value = \"borrow it\" class = \"button\">";
  echo "</ul>";
  echo "</form>";
  echo "</div>";
  $p++;
  if ($p>50) break;
  }
  
  $y = "'".$_GET["press"]."'";
	$sql = "select * 
				from book
				where press = ".$y.$order;
	$result= mysql_query($sql);
	while($row = mysql_fetch_array($result))
  {
   echo "<div id = \"login\" class=\"form-action show\">";
 
  echo "<form action=\"userborrow.php\" method=\"get\">";
 
  echo "<ul>";
  
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">NO.";
  echo $p."</li>";
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">Book Number:</li>";
  echo $row['book_id'];
  $book_id_now = $row['book_id']; 
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">Book Name:</li>";
  echo $row['book_name'];
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">Numbers In stock:</li>";
  echo $row['stock'];
  $CardNumber = $_GET['CardNumber'];
  echo "<input type = \"hidden\" name = \"CardNumber\" value = $CardNumber \>";
  echo "<input type = \"hidden\" name = \"BookNumber\" value = $book_id_now \>";
  echo "<input type = \"hidden\" name = \"url\" value = $url \>";
  echo "<input style = \"font-size :13px; \" type=\"submit\" value = \"borrow it\" class = \"button\">";
  echo "</ul>";
  echo "</form>";
  echo "</div>";
  $p++;
  if ($p>50) break;
  }
 
  $y = "'".$_GET["authorname"]."'";
	$sql = "select * 
				from book
				where author = ".$y.$order;
	$result= mysql_query($sql);
	while($row = mysql_fetch_array($result))
  {
   echo "<div id = \"login\" class=\"form-action show\">";
 
  echo "<form action=\"userborrow.php\" method=\"get\">";
 
  echo "<ul>";
  
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">NO.";
  echo $p."</li>";
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">Book Number:</li>";
  echo $row['book_id'];
  $book_id_now = $row['book_id']; 
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">Book Name:</li>";
  echo $row['book_name'];
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">Numbers In stock:</li>";
  echo $row['stock'];
  $CardNumber = $_GET['CardNumber'];
  echo "<input type = \"hidden\" name = \"CardNumber\" value = $CardNumber \>";
  echo "<input type = \"hidden\" name = \"BookNumber\" value = $book_id_now \>";
  echo "<input type = \"hidden\" name = \"url\" value = $url \>";
  echo "<input style = \"font-size :13px; \" type=\"submit\" value = \"borrow it\" class = \"button\">";
  echo "</ul>";
  echo "</form>";
  echo "</div>";
  $p++;
  if ($p>50) break;
  }
 
  $y = "'".$_GET["kind"]."'";
	$sql = "select * 
				from book
				where kind = ".$y.$order;
	$result= mysql_query($sql);
	while($row = mysql_fetch_array($result))
  {
   echo "<div id = \"login\" class=\"form-action show\">";
 
  echo "<form action=\"userborrow.php\" method=\"get\">";
 
  echo "<ul>";
  
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">NO.";
  echo $p."</li>";
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">Book Number:</li>";
  echo $row['book_id'];
  $book_id_now = $row['book_id']; 
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">Book Name:</li>";
  echo $row['book_name'];
  echo "<li style = \"font-size :18px; font-weight:bold; color:#C8C8C8\">Numbers In stock:</li>";
  echo $row['stock'];
  $CardNumber = $_GET['CardNumber'];
  echo "<input type = \"hidden\" name = \"CardNumber\" value = $CardNumber \>";
  echo "<input type = \"hidden\" name = \"BookNumber\" value = $book_id_now \>";
  echo "<input type = \"hidden\" name = \"url\" value = $url \>";
  echo "<input style = \"font-size :13px; \" type=\"submit\" value = \"borrow it\" class = \"button\">";
  echo "</ul>";
  echo "</form>";
  echo "</div>";
  $p++;
  if ($p>50) break;
  }  
    echo("
            </div>
          </div>")
;
//echo $x;
//echo $y;
?>
<html>
<body>

<body>
<html>