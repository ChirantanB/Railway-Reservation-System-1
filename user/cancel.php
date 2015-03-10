
<!DOCTYPE html>
<html>
	<head>
		<style>
			table,th,tr,td{
				border:1px solid;
				padding:10px;
				border-collapse:collapse;
			}
			th{
				background-color:#abdec2;
			}
			tr{
				background-color:#decab1;
			}
			td{
				text-align:center;
			}
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
		<form action="Ccancel.php" method="post" onsubmit="return validate()" name="myform">
			<b>PNR number:<input type="text" name="pnr"/></b><br /><br />
			<a><input type="submit" name="submit" value="submit"></form></a>
			
		</form>
</body>
</html>		