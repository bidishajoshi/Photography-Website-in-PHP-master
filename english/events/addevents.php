<?php

session_start();


$con = mysqli_connect("localhost", "g559168_admin", "A05bf311", "g559168_events") or die(mysqli_connect_error());


$name = mysqli_real_escape_string($con, $_POST['name']);
$contact = mysqli_real_escape_string($con, $_POST['contact']);
$location = mysqli_real_escape_string($con, $_POST['location']);
$time = mysqli_real_escape_string($con, $_POST['time']);
$cost = mysqli_real_escape_string($con, $_POST['cost']);
$Url = mysqli_real_escape_string($con, $_POST['Url']);

$sql="INSERT INTO Events (name,contact, location, time, cost, Url)
VALUES ('$name','$contact', '$location', '$time','$cost','$Url')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
header( "refresh:2;url=http://www.grahamharkness.ie/english/events.php" );

?>


<h1> Thanks for Contributing. Your event will be live shortly.Please wait to be redirected.


<?php
    exit();

?>


