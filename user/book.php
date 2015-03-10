
<!DOCTYPE html>
<html>
	<head>
		<title>Railway Reservation</title>
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
<script>
			function validate_form()
			{
				var x=document.forms["adform"]["pname"].value;
				if(x==null || x=="")
				{
					alert("Enter Passenger name");
					return false;
				}
				x=document.forms["adform"]["date"].value;
				if(x==null || x=="")
				{
					alert("Enter Date");
					return false;
				}
				x=document.forms["adform"]["seat"].value;
				if(x==null || x=="")
				{
					alert("Enter Number of seats");
					return false;
				}
			}
		</script>
		</style>
	</head>
	<body>
		<form name="adform" action="tickets.php" onsubmit="return validate_form()" method="post">
		<b>Passeger Name:<input type="text" name="pname"/></b><br /><br />
		<b>Booking Date:<input type="text" name="date"/></b><br /><br />
		<b>Number of seats:<input type="text" name="seat"/></b><br /><br />
		<b>Booking train no:<input type="text" name="train"/></b><br /><br />
		<a><input type="submit" value="book" name="submit"/></a><br />
		</form>	
	</body>
</html>