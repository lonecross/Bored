<?php

session_start();

$username="root";
$password="";
$database="bored";


mysql_connect('localhost',$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>So Bored at Work</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
    <body>
<!-- Wrap all page content here -->
    <div id="wrap">
	
<script type="text/javascript">

function loadtotal()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("total").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","gettotal.php",false);
xmlhttp.send();
}

function totalagain(){
	var test2 = setInterval(function () {
	loadtotal();
	}, 5000);
}
function incrementtotal()
{
var xmlhttp;
if (window.XMLHttpRequest)
 {// code for IE7+, Firefox, Chrome, Opera, Safari
 xmlhttp=new XMLHttpRequest();
 }
else
 {// code for IE6, IE5
 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 }
xmlhttp.onreadystatechange=function()
 {
 if (xmlhttp.readyState==4 && xmlhttp.status==200)
   {
//   document.getElementById("total").innerHTML=xmlhttp.responseText;
   }
 }
xmlhttp.open("GET","incrementtotal.php",false);
xmlhttp.send();
}

function countdown() {
	//gets a time x minutes from now for the countdown
	var today=new Date();
	var min = 0.5;
	var timelength = min*60000;
	var target_date = new Date(today.getTime() + timelength);
	incrementtotal();
	
	//sets a cookie that expires in x minutes.  the value of the cookie is the time stamp
	document.cookie = "active="+target_date.toUTCString()+"; expires=" + target_date.toUTCString();

	//this is the repeating function that does the countdown
	timeremaining(target_date);
}


//looks for cookie.  sets button to inactive if set.  also starts countdown
function checkcookie() {
	if (document.cookie.indexOf("active") >= 0){
	document.getElementById("bored").disabled = true;
	document.getElementById('cookie').innerHTML = "cookie is set"; 	
	cookiestuff();
	} else{
	document.getElementById("bored").disabled = false; 
	document.getElementById('cookie').innerHTML = "cookie is not set"; 
	document.getElementById('timer').innerHTML = "I'll bet you are bored."; 
	}	
}

//this function checks the cookie but does not initiate countdown
function checkcookienotimer() {
	if (document.cookie.indexOf("active") >= 0){
	document.getElementById("bored").disabled = true;
	document.getElementById('cookie').innerHTML = "cookie is set"; 	
	//cookiestuff();
	} else{
	document.getElementById("bored").disabled = false; 
	document.getElementById('cookie').innerHTML = "cookie is not set"; 
	document.getElementById('timer').innerHTML = "I'll bet you are bored."; 
	}	
}


function cookiestuff(){
//if (document.cookie.indexOf("active") >= 0){
	var x = document.cookie;
	x = x.substring(7);
	x = new Date(x);
	right_now = new Date();
	var seconds_left = (x - right_now)/1000;
	//document.getElementById('cookiestuff').innerHTML = seconds_left; 
	timeremaining(x);
//	}
//	else{
//	document.getElementById('timer').innerHTML = "Are you bored?";
//	}
	
}

//takes date parameter and does a countdown to zero
function timeremaining(time){
	var test = setInterval(function () {
	var right_now = new Date();
    var seconds_left = (time - right_now) / 1000;
	var minutes, seconds;
	minutes = parseInt(seconds_left / 60);
    seconds = parseInt(seconds_left % 60);
	document.getElementById("bored").disabled = true; 
	
	if (seconds_left <= 0){
	minutes = 0;
    seconds = 0; 
	//document.getElementById("bored").disabled = false; 
	//document.cookie = "active=no"; expires=Thu, 01 Jan 1970 00:00:00 GMT";
	clearInterval(test);
	}
	
	document.getElementById('timer').innerHTML = minutes + " minutes, " + seconds + " seconds"; 
	checkcookienotimer();
	}, 1000);

}
	
</script>
  <center>
<span id="total">
<script type="text/javascript">
loadtotal();
totalagain();
</script>
</span><br>






  <form name="eqip">
  <button type="button" onclick="countdown()" class="btn" id="bored">Click if you are bored</button>
  </form><br><br>
 

  
<span id="timer">
</span><br><br>
<span id="cookie">
</span><br><br>
 <script type="text/javascript">
checkcookie();
</script>


</center>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

	
</div><!-- end wrap -->

<div id="footer"><div class="container"><font size=1><center>
This is a footer.  It is quite sticky.
</center></font>      
</div>
    </div>
  </body>
</html>

