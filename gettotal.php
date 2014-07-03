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
print '<h2>'.$display['total']."</h2><br>";



?>