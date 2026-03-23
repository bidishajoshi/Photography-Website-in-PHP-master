<?php


$hostname="localhost";
$username="g559168_reg";
$password="DGRNeEmAB5";
$database="g559168_student";

$con=mysql_connect($hostname,$username,$password);
if(! con)
{
die('Connection Failure'.mysql_error());	
}

mysql_select_db($database,$con);

?>

