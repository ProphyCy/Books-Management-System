<!DOCTYPE html>

<?php 
  $userName = $_GET['username'];
  $passWord = $_GET['password'];
 ?>

<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Register</title>
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

  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="container">
        <center>
        <embed src = "flash.swf"
          width="1000"
          height="30"
          quality="high"
          menu="false"
          play="true"
          loop="false"
          FlashVars=""
          allowScriptAccess="sameDomain"
          type="application/x-shockwave-flash"
          pluginspage="http://www.adobe.com/go/getflashplayer"
        >
        </center>
        </embed>
        <div class="flat-form" >
            
            <div class="form-action show">
                <h1>More Information</h1>
                <form name="frm" action="registCard.php" method="get">
                    <ul>
                        <li>
                            <input type="text" value="<?php echo $userName; ?>" placeholder="Username" id="CardNumber" name="CardNumber"/>
                        </li>
                        <li>
                            <input type="password" value="<?php echo $passWord; ?>" placeholder="Password" id="PassWord" name="PassWord"/>
                        </li>
                        <li>
                            <input type = "text" placeholder="Name" name = "Name" />
                            </li>
                            <li>
                              <input type = "text" placeholder="Department" name = "Department" />
                            </li>
                        <li>
                            <input type="submit" value="Sign Up" class="button" />
                        </li>
                    </ul>
                </form>
            </div>
        </div>  
    </div>
    <script class="cssdeck" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script language="JavaScript" src="style.js"></script>
</body>
</html>

<!--@import url(http://fonts.googleapis.com/css?family=Roboto:100);
//@import url(http://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css);
--!>

