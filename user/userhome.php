<!DOCTYPE html>
<html>
<head>
<title>Railway Reservation</title>
<link rel="Stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<br />
<br />
<br />
<h1 align="center" color="white">Railway Reservation System</h1>
<br />
<br />
<br />
  <img src="../images/rail1.png" align="center">

  
  <header class="mainheader">
<nav>
<ul>

<?php
	session_start();
	if($_SESSION['sid']==session_id())
	{
        echo "<a href='train_status.php'>Train Status</a><br />";
        echo "<a href='view_schedule.php'>View Schedule</a><br />";
        echo "<a href='trains_between_stations.php'>Trains between stations</a><br />"; 
        echo "<a href='book.php'>Booking</a><br />";  
        echo "<a href='PNR.php'>PNR Status</a><br />"; 
        echo "<a href='cancel.php'>Cancel</a><br />"; 
		echo "<a href='logout.php'>Logout</a><br />";
	}
	else
	{
		header("location:login.php");
	}
?>


</nav>
</header>  
</body>
</html>
