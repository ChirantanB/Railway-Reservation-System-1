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

 <?php 

 require '../dbconnect.php';

if(isset($_POST['submit']))
{

    $User_ID=mysql_escape_string($_POST['User_ID']);
    $Password=mysql_escape_string($_POST['Password']);

    
    $sql=mysqli_query($con,"SELECT * FROM `admin_table` WHERE `User_ID`='$User_ID' AND `Password`='$Password'");
    if(mysqli_num_rows($sql) > 0){
	header("location:adminhome.php");
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
   <b>User Name: <input type="text" name="User_ID">
   </b><br><br>
   <b>Password: <input type="password" name="Password">
   </b><br><br>
   <a><input type="submit" name="submit" value="Submit"> </a>
</form>
EOT;

echo $form;
}
?>
</body>
</html> 