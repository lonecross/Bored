<?php

$username="root";
$password="";
$database="bored";


mysql_connect('localhost',$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$result = mysql_query("SELECT * FROM bored")
or die(mysql_error());  

//$_SESSION['test']="session is working";
//echo $_SESSION['test'];


//$randomnumber = rand(1,21);
$total = mysql_data_seek($result, 0) or die(mysql_error());
//echo $option1;
if ($total){
$display = mysql_fetch_array($result);
}
$display[0]++;
//print '<h2>'.$display[0]."</h2><br>";

mysql_query("UPDATE bored SET total=".$display[0]);

//deposit cookie string into separate table
if (isset($_COOKIE["active"])){
  //echo "Welcome " . $_COOKIE["user"] . "!<br>";
  $cookietime = $_COOKIE["active"];
  mysql_query("INSERT INTO `bored`.`clicktimes` (`timestamp`) VALUES ('$cookietime')");
//}
//echo "Welcome " . $_COOKIE["active"] . "!<br>";
}


?>