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
		$pname=$_POST['pname'];
		$n=$_POST['seat'];
		$date=$_POST['date'];
		$number=$_POST['train'];
		

     
			$avail=mysqli_query($con,"SELECT * from train_status where Train_ID='$number'");
			$re=mysqli_fetch_array($avail);
			$rem=$re['Available_seats'];
			if($rem > $n)
			{
				$rem=$rem-$n;
				$random=str_shuffle("012345678901234567892134479147431843782134474582465123412");
				$pnr=substr($random,0,10);
				mysqli_query($con,"UPDATE `train_status` set Available_seats='$rem',Booked_seats='$n' where `Train_ID`='$number' AND `Available_Date`='$date'");
				mysqli_query($con,"INSERT INTO `tickets` (PNR,Passeneger_Name,Train_ID,No_of_seats,Train_status,Booking_date) VALUES ('$pnr','$pname','$number','$n','confirm','$date')");
				echo "<b>" . "Your Request is completed"."</b>"."<br/>";
				echo "<b>" ."You Have booked ".$n." seats" . "</b>". "<br/>";
				echo "<b>" ."PNR :".$pnr."</b>";
				
			}else{
				echo "<b>" ."Unable to book Desired Number of seats"."</b>" ."<br/>";
				echo "<b>" ."Available Seats :".$rem ."</b>";
			}
			
			
		}

?>
</body>
</html>