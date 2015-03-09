<!DOCTYPE HTML>
<html>
<head>
	<style>
.clearfix{ #zoom:1;}
.clearfix:after{ content:' '; display:block; height:0; clear:both; color:#fff;}
body{ background:#333;}
.breathe-btn{ 
    position:relative; width:100px; height:50px; margin:40px auto; 
    line-height:40px; border:1px solid #292929; border-radius:5px; 
    color:#292929; 
    font-size:20px; text-align:center; 
    cursor:pointer; 
    box-shadow:0 1px 2px rgba(0,0,0,.3); 
    overflow:hidden; 
    background-image: -webkit-gradient(linear, left top, left bottom, from(#292929), to(#e74c3c));
    -webkit-animation-timing-function: ease-in-out;
    -webkit-animation-name: breathe;
    -webkit-animation-duration: 2700ms;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-direction: alternate;
    -webkit-transition: all ease .3s;  
    transition: all ease .3s  
}
@-webkit-keyframes breathe {
    0% { opacity: .2; box-shadow:0 1px 2px rgba(0,0,0,0.1);}
    100% { opacity: 1; border:1px solid rgba(231,76,60,1); box-shadow:0 1px 30px rgba(231,76,60,0.5);}
}
.breathe-btn:hover{
-webkit-transform: scale(1.05);  
    transform: scale(1.05);  
    box-shadow: 0px 0px 18px rgba(0,0,0,.5);            
} 
.Indexpost img {  
    padding: 8px;  
    background-color: #FFF;  
    box-shadow: 0px 0px 18px rgba(0,0,0,.4);  
    -webkit-transition: all ease .3s;  
    transition: all ease .3s  
}  
  
.Indexpost img {  
margin-right: 10px;  
    width:140px;  
    height:100px;  
    overflow:hidden;  
float: left;  
}  
.Indexpost img:hover {  
    -webkit-transform: scale(1.05);  
    transform: scale(1.05);  
    box-shadow: 0px 0px 18px rgba(0,0,0,.5);  
}  
</style>

</head>
<body>
<div class="breathe-btn"> I am Hero</div>
<div class = "Indexpost img">
<img class="alignnone" src="button1.jpg" width="449" height="293"></div>
</body>
</html>