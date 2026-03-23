<?php

session_start();

$con = mysqli_connect("localhost", "g559168_administ", "A05bf311", "g559168_registered") or die(mysqli_connect_error());



$username = mysqli_real_escape_string($con, $_POST['username']);
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$email = mysqli_real_escape_string($con, $_POST['email']);

$sql="INSERT INTO users (Username,FirstName, LastName, Password, Email)
VALUES ('$username','$firstname', '$lastname', '$password','$email')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
header( "refresh:2;url=http://www.grahamharkness.ie" );

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Prevents Zooming-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<link rel="stylesheet" type="text/css" href="../../style.css">


<!--Favicon-->

<link rel="shortcut icon"
    href="http://grahamharkness.ie/favicon.ico"
    type="image/x-icon" />

<!-- -->

<title>Inspired Image Register Success</title>
</head>

<body>


<?php include_once("../../header.php"); ?>
<?php include_once("../../navbar.php"); ?>
<?php include_once("thanks.php"); ?>


</body>
</html>





<?php


die();
?>