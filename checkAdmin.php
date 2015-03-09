<?php
  $con = mysql_connect("localhost","root","12345");
  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("my_db", $con);
  $create_admin = "CREATE TABLE admin 
  (
    username  varchar(20),
    password varchar(20),
    PRIMARY KEY (username)
  )";
  mysql_query($create_admin);

  $Username = $_GET["username"];
  $Password = $_GET["password"];
  /*$admin =  mysql_query("
        select *
        from admin
    ");
    
    mysql_query("insert into admin values('root','12345')");
    $count = 0;
   while($row = mysql_fetch_array($admin))
  {
    $count = $count + 1;
    echo $row["username"];
    echo $row["password"];
  }  
*/
  $admin = mysql_query("
        select *
        from admin
        where admin.username = \"" .$Username. "\"
    ");
  
  $count = 0;

  while($row = mysql_fetch_array($admin))
  {
    $count = $count + 1;
    $rightPassword = $row['password'];
  }

	if ($Password == $rightPassword)
	{ 
		echo "<script>alert('Log in successfully!')</script>";
		echo "<script language=\"javascript\">";
		echo "document.location=\"admin.php\"";
		echo "</script>";
	}
  elseif ($count == 0) {
    echo "<script>alert('Inexistent username')</script>";
    echo "<script language=\"javascript\">";
    echo "document.location=\"index\"";
    echo "</script>";
  }
	else {
		echo "<script>alert('Wrong password!')</script>";
		echo "<script language=\"javascript\">";
		echo "document.location=\"index\"";
		echo "</script>";
		
	}
?>