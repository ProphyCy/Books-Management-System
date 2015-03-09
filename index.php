<!DOCTYPE html>

<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Library System</title>
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
  </style>
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
            <ul class="tabs">
                <li>
                    <a href="#login" class="active">&nbsp Admin</a>
                </li>
                <li>
                    <a href="#register">&nbsp Register &nbsp</a>
                </li>
                <li>
                    <a href="#reset">&nbsp User &nbsp</a>
                </li>
            </ul>
            <div id="login" class="form-action show">
                <h1>Library System</h1>
                <h3>
                    Administer Access
                </h3>
                <form name="frm" action="checkAdmin.php" method="get">
                    <ul>
                        <li>
                            <input type="text" placeholder="Username" id="username" name="username"/>
                        </li>
                        <li>
                            <input type="password" placeholder="Password" id="password" name="password"/>
                        </li>
                        <li>
                            <input type="submit" value="Login" class="button" />
                        </li>
                    </ul>
                </form>
            </div>
            <!--/#login.form-action-->
            <div id="register" class="form-action hide">
                <h1>Register</h1>
                <p>
                    You should totally sign up for our super awesome service.
                    It's what all the cool kids are doing nowadays.
                </p>
                <form name="frm1" action="register.php" method="get">
                    <ul>
                        <li>
                            <input type="text" placeholder="Username" id="username" name="username"/>
                        </li>
                        <li>
                            <input type="password" placeholder="Password" id="password" name="password"/>
                        </li>
                        <li>
                            <input type="submit" value="Sign Up" class="button" />
                        </li>
                    </ul>
                </form>
            </div>
            <!--/#register.form-action-->
            <div id="reset" class="form-action hide">
                <h1>Login</h1>
                <h3>
                  User Access
                </h3>
                <form name = "frm2" action="user.php" method="get">
                    <ul>
                        <li>
                            <input type="text" placeholder="username" id="username" name="username" />
                        </li>
                        <li>
                            <input type="password" placeholder="password" id="password" name="password"/>
                        </li>
                        <li>
                            <input type="submit" value="Login" class="button" />
                        </li>
                    </ul>
                </form>
            </div>
            <!--/#register.form-action-->
        </div>
    </div>
    <script class="cssdeck" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script language="JavaScript" src="style.js"></script>
</body>
</html>

<!--@import url(http://fonts.googleapis.com/css?family=Roboto:100);
//@import url(http://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css);
--!>

