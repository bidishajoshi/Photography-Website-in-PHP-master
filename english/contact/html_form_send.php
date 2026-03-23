<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$comments = $_POST['comments'];
     
     
   $to = "graham.harkness@gmail.com";


$header = "From: " . $name . " < " . $email . ">";

mail($to, $subject, $message, $header);

 header( "refresh:2;url=http://www.grahamharkness.ie" ); 
?>

<h1>
Your message has been sent. Please wait to be redirected to the main page. Alternatively please click <a href="http://www.grahamharkness.ie"> Here </a>
<?php


die();
?>
