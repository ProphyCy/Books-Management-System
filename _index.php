<style>
body {
  background: #292929;
  color: white;
  font-family: 'Roboto';
}
.flat-form {
  position:absolute; left:0px; top:80px;
  background: #e74c3c;
  margin: 25px auto;
  width: 400px;
  height: 400px;
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
  padding: 15px 25px 15px 27px
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

<script>
function r()
{
var username=document.getElementById("Username");
var pass=document.getElementById("Password");
if(username.value=="")
{
alert("pass enter your user name");
username.focus();
return ;
}
      else  if(pass.value=="")
{
alert("please enter your password");
return;
}
       else  if((pass.value=="12345")&&(username.value=="root"))
{
    frm.submit();
}
      else
         {
            alert("sorry,the password is not correct!");
             return;
          }
return true;
}
</script>

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
</head>
<body>

    <div class="container">
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
                <p>
                    Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                    Maecenas sed diam eget risus varius bladit sit amet non
                </p>
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
                <p>
                    To reset your password enter your email and your birthday
                    and we'll send you a link to reset your password.
                </p>
                <form name = "frm2" action="user.php" method="get">
                    <ul>
                        <li>
                            <input type="text" placeholder="username" id="username" name="username" />
                        </li>
                        <li>
                            <input type="text" placeholder="password" id="password" name="password"/>
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
