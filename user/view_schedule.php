<!DOCTYPE html>
<html>
<head>
<title>Railway Reservation</title>
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
<body>
<br />
<br />
<br />
<h1>Railway Reservation System</h1>
<br />
<br />
<br />
  <img src="../images/rail1.png" align="center">

  <br />
<br />
<br />
  <header class="mainheader">




<?php 

 require '../dbconnect.php';

if(isset($_POST['submit']))
{

    $Train_ID=mysql_escape_string($_POST['Train_ID']);

    $sql=mysqli_query($con,"SELECT * FROM `train` WHERE `Train_ID`='$Train_ID'");
    echo "<table border='1'>

<tr>
<th>Train_ID</th>
<th>Train_name</th>
<th>Train_type</th>
<th>Source_stn</th>
<th>Destination_stn</th>
</tr>";
while($row = mysqli_fetch_array($sql)) {
  echo "<tr>";
  echo "<td>" . $row['Train_ID'] . "</td>";
  echo "<td>" . $row['Train_name'] . "</td>";
  echo "<td>" . $row['Train_type'] . "</td>";
  echo "<td>" . $row['Source_stn'] . "</td>";
  echo "<td>" . $row['Destination_stn'] . "</td>";
  echo "</tr>";
}

echo "</table>";
  

  $sql=mysqli_query($con,"SELECT * FROM `route` WHERE `Train_ID`='$Train_ID'");
    echo "<table border='1'>
    <h2>Train Schedule</h2>
<tr>
<th>Train_ID</th>
<th>stop number</th>
<th>Station Name</th>
<th>Arrival Time</th>
<th>Departure Time</th>
</tr>";

while($row = mysqli_fetch_array($sql)) {
  echo "<tr>";
  echo "<td>" . $row['Train_ID'] . "</td>";
  echo "<td>" . $row['stop_number'] . "</td>";
  echo "<td>" . $row['Station_ID'] . "</td>";
  echo "<td>" . $row['Arrival_time'] . "</td>";
  echo "<td>" . $row['Departure_time'] . "</td>";
  echo "</tr>";
}

 
 }
 else{

$form = <<<EOT
<form action="view_schedule.php" method="POST">

<b>Train Number:<input type="text" name="Train_ID" /><br /></b><br />
<a><input type="submit" value="submit" name="submit" /></a>
</form>
EOT;

echo $form;
 

}
 
?> 
</body>
</html> 