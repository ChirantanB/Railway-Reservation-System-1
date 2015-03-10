


 <?php 
 require '../dbconnect.php';

if(isset($_POST['submit']))
{

    $EmailID=mysql_escape_string($_POST['EmailID']);
    $Password=mysql_escape_string($_POST['Password']);
    $Fullname=mysql_escape_string($_POST['Fullname']);
    $Gender=mysql_escape_string($_POST['Gender']);
    $Age=mysql_escape_string($_POST['Age']);
    $Mobile=mysql_escape_string($_POST['Mobile']);
    $City=mysql_escape_string($_POST['City']);
    $State=mysql_escape_string($_POST['State']);
    
    
     mysqli_query($con,"INSERT INTO `user_table` (`EmailID`,`Password`,`Fullname`,`Gender`,`Age`,`Mobile`,`City`,`State`) VALUES ('$EmailID','$Password','$Fullname','$Gender','$Age','$Mobile','$City','$State')") or die(mysql_error());
     header("location:../index.php");
} 

?>
<!DOCTYPE html>
<html>
	<head>
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
			function validate_from()
			{
				var x=document.forms["adform"]["EmailID"].value;
				if(x==null || x=="")
				{
					alert("Enter your EmailID");
					return false;
				}
				x=document.forms["adform"]["Password"].value;
				if(x==null || x=="")
				{
					alert("Enter Password");
					return false;
				}
				x=document.forms["adform"]["Fullname"].value;
				if(x==null || x=="")
				{
					alert("Enter Fullname");
					return false;
				}
				x=document.forms["adform"]["Gender"].value;
				if(x==null || x=="")
				{
					alert("Enter Gender");
					return false;
				}
				x=document.forms["adform"]["Age"].value;
				if(x==null || x=="")
				{
					alert("Enter Age");
					return false;
				}
				x=document.forms["adform"]["Mobile"].value;
				if(x==null || x=="")
				{
					alert("Enter Mobile number");
					return false;
				}
				x=document.forms["adform"]["City"].value;
				if(x==null || x=="")
				{
					alert("Enter City");
					return false;
				}
				x=document.forms["adform"]["State"].value;
				if(x==null || x=="")
				{
					alert("Enter State");
					return false;
				}
			}
		</script>


<form name="adform" action="" onsubmit="return validate_from()" method="post">

<b>EmailID:<input type="text" name="EmailID" /></b><br /><br />
<b>Password:<input type="Password" name="Password" /></b><br /><br />
<b>Fullname:<input type="text" name="Fullname" /></b><br /><br />
<b>Gender:<input type="text" name="Gender" /></b><br /><br />
<b>Age:<input type="text" name="Age" /></b><br /><br />
<b>Mobile:<input type="text" name="Mobile" /></b><br /><br />
<b>City:<input type="text" name="City" /></b><br /><br />
<b>State:<input type="text" name="State" /></b><br /><br />
<a><input type="submit" value="Register" name="submit" /></a>
</form>


 </body>
</html> 