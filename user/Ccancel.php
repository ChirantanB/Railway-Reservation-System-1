 <!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<link rel="Stylesheet" type="text/css" href="../css/login.css">
</head>
<body class="mainheader">
<br />
<br />
<h1>Railway Reservation System</h1>
<br />
<br />
<br />
<img src="../images/rail1.png">
<br />
<br />
<br />
<br />
<br />

<?php

    require '../dbconnect.php';

	if(isset($_POST['submit']))
	{
		$pnr=$_POST['pnr'];
		

     
			$result=mysqli_query($con,"SELECT * from tickets where PNR='$pnr'");
			$re=mysqli_fetch_array($result);
			$seats=$re['No_of_seats'];
			$date=$re['Booking_date'];
			$Train_ID=$re['Train_ID'];
			$result2=mysqli_query($con,"SELECT * from train_status where Train_ID='$Train_ID' and Available_Date='$date'");
				$re2=mysqli_fetch_array($result2);
				$avail=$re2['Available_seats'];
				$booked=$re2['Booked_seats'];
				$avail=$avail+$seats;
				$booked=$booked-$seats;
				mysqli_query($con,"UPDATE `train_status` set Available_seats='$avail',Booked_seats='$booked' where `Train_ID`='$Train_ID' AND `Available_Date`='$date'");
				mysqli_query($con,"DELETE from tickets where PNR='$pnr'");
				echo "<b>" ."Your Request is completed"."</b>"."<br/>";
				echo "<b>"."You Have cancelled the seats" ."</b>"."<br/>";
				
			}else{
				echo "<b>"."Unable to cancel"."</b>"."<br/>";
			}
			
			
	

?>
</body>
</html>