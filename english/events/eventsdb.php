<?php
 
// Sets the reporting level. We have set it to all

  error_reporting(E_ALL);
 ini_set('display_errors','1');
 
// Establish a variable called CON and thats yur connetction. "Or die" //cuts off the remainder of the page.

 $con = mysqli_connect("localhost", "g559168_admin", "A05bf311", "g559168_events") or die(mysqli_connect_error());
 

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../english/events/formstyle.css">
<title>Untitled Document</title>
</head>

<body>
<table width="100%">
<tr>
  <th>Name</th>
  <th>Contact</th>
  <th>Location</th>
  <th>Time</th>
  <th>Cost</th>
  <th>Link to Website</th>
</tr>
<?php

//create var called query and put in a select statement.

$query="SELECT * FROM Events";

//run query .  con = var stores connect query = results set . Saves result //to varialbe called results
$results = mysqli_query($con, $query);

//Parse the results the screen. While we can take a row keep going
//Create a var called rows as an empty array. We want to pass all the data //into an empty array

// : works for loops and you put in end while

while ($row = mysqli_fetch_assoc($results)) : 
	
?>
<tr>
  <td><?php echo $row['Name']; ?></td>
  <td><?php echo $row['Contact']; ?></td>
  <td><?php echo $row['Location']; ?></td>
  <td><?php echo $row['Time']; ?></td>
  <td><?php echo $row['Cost']; ?></td>
  <td><a href="events_DB.php?who=<?php echo $row['Url']; ?>">Website</a></td>
</tr>
<?php
	endwhile;
?>

<div id="footer">Graham</div>

</body>
</html>