<?php
session_start();
if($_SESSION["loggedIn"] != true) {
	header( "refresh:4;url=http://www.grahamharkness.ie/english/equipment.php" );
	
	?>
	
	
	<link rel="stylesheet" type="text/css" href="../style.css">
<?php include_once("../header.php"); ?>
<?php include_once("../navbar.php"); ?>
<?php include_once("../english/events/events_notreg.php"); ?>
   
	
	<?php
    exit();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php include_once("../scripts.php"); ?>

<!--Prevents Zooming-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="../english/events/events_style.css">
 <?php include_once("../metadata.php"); ?>

<!-- -->

<!--Favicon-->

<link rel="shortcut icon"
    href="http://grahamharkness.ie/favicon.ico"
    type="image/x-icon" />

<!-- -->

<title>Inspired Image Upcoming Events</title>
</head>

<body>
<?php include_once("../header.php"); ?>
<?php include_once("../navbar.php"); ?>
<?php include_once("../english/events/subcontainer_ev.php"); ?>
<?php include_once("../english/events/eventsDB.php"); ?>
<?php include_once("../footer.php"); ?>

</body>
</html>