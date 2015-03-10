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

    $EmailID=mysql_escape_string($_POST['EmailID']);
    $Password=mysql_escape_string($_POST['Password']);
    
    $sql=mysqli_query($con,"SELECT * FROM `user_table` WHERE `EmailID`='$EmailID' AND `Password`='$Password'");
    if(mysqli_num_rows($sql) > 0){
    	session_start();
	$_SESSION['sid']=session_id();
	header("location:userhome.php");
}
else {
// Jump to login page
header('Location: login.php');
}
    }
 else
 {
$form = <<<EOT
<form method="post" action="login.php"> 
  <b>EmailID: <input type="text" name="EmailID" color="white"></b>
   <br><br>
   <b>Password: <input type="password" name="Password" color="white"></b>
   <br><br>
  <a> <input type="submit" name="submit" value="Submit"></a>
</form>
EOT;

echo $form;
}
?>
</body>
</html> 