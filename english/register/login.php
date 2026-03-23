<?php
session_start();

$con = mysqli_connect("localhost", "g559168_administ", "A05bf311", "g559168_registered") or die(mysqli_connect_error());

$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);


$query="select * from users where username = '$username' and password = '$password'";


$results = mysqli_query($con, $query);
$count=0;

while ($row = mysqli_fetch_assoc($results)) : 
$count++;

if ($count >= 1) {
    
	$_SESSION['loggedIn'] = "true";
	 header('Location: ../../../index.php');
	
} else {
   	$_SESSION['loggedIn'] = "false";
	header('Location: ../../../index.php');
	echo "Incorrect. Please try again.";
}

	endwhile;
?>




	