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

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Flat Login</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->

    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

  <style type="text/css">
  .file{position:absolute; top:130px; right:360px; height:40px; filter:alpha(opacity:1);opacity: 0;width:80px }
    body {
      background: #292929;
      color: white;
      font-family: 'Roboto';
    }
    .flat-form {
      position:absolute; left:0px; top:80px;
      background: #e74c3c;
      margin: 25px auto;
      width: 500px;
      height: 800px;
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
    .tabs li {
      display: block;
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
      padding: 11px 22px 11px 20px;
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
      width: 100%;
      height: 40px;
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
        border: none;
        display: block;
        background: #136899;
        height: 40px;
        width: 80px;
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
</head>
<body>

<div class="container">
    <h1 align="center">
      Library Database
    </h1>

    <div class="flat-form">
      <ul class="tabs">
          <li>
              <a href="#file" class="active">FILE</a>
          </li>
          <li>
              <a href="#search">QUERY</a>
          </li>
          <li>
              <a href="#book">BOOK</a>
          </li>
          <li>
              <a href="#card">CARD MANAGE</a>
          </li>
      </ul>

      <div id="file" class="form-action show">
        <h1> Open File </h1>
        <h3> Input the file name. </h3>
        <form action="1.php" method="get">
          <ul>
          <li><input  value = "open" class="button"/> </li>
  			<br/>
           <li> <input type="text"  placeholder=".txt or .xlsx only" name="file2" id="file2"/> </li>
          <input type="file" name="fileField" class="file" id="fileField" size="20" onchange="document.getElementById('file2').value=this.value" />
            <li> <input type="submit" value="Add" class="button" />       </li>
          </ul>
        </form>
        <br />
        <h1>Clear Data</h1>
        <form action="clear.php" method="get">
          <input type="submit" class="button" value="Clear" />
        </form>
      </div>

    
      <div id="search" class="form-action hide">
        <h1>
          Query
        </h1>
        <form action="2.php" method="get">
          <ul>
            <li> <input type="text" placeholder="Start Year" name="yearstart" /> </li>
            <li> <input type="text" placeholder="End Year" name="yearend" /> </li>
            <li> <input type="text" placeholder="Author Name" name="authorname" /> </li>
            <li> <input type="text" placeholder="Press" name="press" /> </li>
            <li> <input type="text" placeholder="Kind" name="kind" /> </li>
            <li> <input type="text" placeholder="Bookname" name="bookname" /> </li>
            <li> <input type="text" placeholder="Price From" name="pricefrom" /> </li>
            <li> <input type="text" placeholder="Price End" name="priceend" /> </li>
            <li><input type="submit" value="Search" class="button" /></li>
          </ul>
        </form>
      </div>

      <div id="book"  class="form-action hide">
          <h2>Borrow</h2>
          <h3>Input books and card information.</h3>
          <form action="adminBorrow.php" method="get">
          <ul>
            <li> 
              <input type = "text" placeholder="Card number" name = "CardNumber" />
            </li>
            <li> 
              <input type = "text" placeholder="Book number" name = "BookNumber" />
            </li>
            <li>
              <input type="submit" value="Borrow" class="button" />
            </li>
          </ul>
        </form>

        <h2>Return</h2>
        <h3>Input books and card information.</h3>
        <form action="adminReturn.php" method="get">
          <ul>
            <li> 
              <input type = "text" placeholder="Card number" name = "CardNumber" />
            </li>
            <li> 
              <input type = "text" placeholder="Book number" name = "BookNumber" />
            </li>
            <li>
              <input type="submit" value="Return" class="button" />
            </li>
          </ul>
        </form>
      </div>

      <div id="card" class="form-action hide">
        <h2>Show Books Borrowed</h2>
        <h3>Input your card number</h3>
        <form action="showCard.php" method="get">
          <ul>
            <li> 
              <input type = "text" placeholder="Card number" name = "CardNumber" />
            </li>
            <li>
              <input type="submit" value="Show" class="button" />
            </li>
          </ul>
        </form>

        <h2>Add Card</h2>
        <h3>Input card information.</h3>
        <form action="addCard.php" method="get">
          <ul>
            <li>
              <input type = "text" placeholder="Card number" name = "CardNumber" />
            </li>
            <li>
              <input type = "text" placeholder="Password" name = "Password" />
            </li>
            <li>
              <input type = "text" placeholder="Name" name = "Name" />
            </li>
            <li>
              <input type = "text" placeholder="Department" name = "Department" />
            </li>
            <li>
              <input type="submit" value="Add" class="button" />
            </li>
          </ul>
        </form>

        <h2>Delete Card</h2>
        <h3>Input Card Number</h3>
        <form action="deleteCard.php" method="get">
          <ul>
            <li> 
              <input type = "text" placeholder="Card number" name = "CardNumber" />
            </li>
            <li>
              <input type="submit" value="Delete" class="button" />
            </li>
          </ul>
        </form>
      </div>
      
    </div>
</div>
<script class="cssdeck" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</body>
</html>

<!--@import url(http://fonts.googleapis.com/css?family=Roboto:100);
//@import url(http://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css);
--!>
<script language="JavaScript">
(function ( $ ) {
  // constants
  var SHOW_CLASS = 'show',
      HIDE_CLASS = 'hide',
      ACTIVE_CLASS = 'active';
  
  $( '.tabs' ).on( 'click', 'li a', function(e){
    e.preventDefault();
    var $tab = $( this ),
         href = $tab.attr( 'href' );
  
     $( '.active' ).removeClass( ACTIVE_CLASS );
     $tab.addClass( ACTIVE_CLASS );
  
     $( '.show' )
        .removeClass( SHOW_CLASS )
        .addClass( HIDE_CLASS )
        .hide();
    
      $(href)
        .removeClass( HIDE_CLASS )
        .addClass( SHOW_CLASS )
        .hide()
        .fadeIn( 550 );
  });
})( jQuery );
</script>