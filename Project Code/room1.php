<?php
require 'connect.php';
$con = mysqli_connect("localhost","root","","hostel");
session_start(); 
$ROLL = $_SESSION['sess_username'];
$year_value = $_POST['year'];
$result = mysqli_query($con,"SELECT * from login WHERE username='" . $_SESSION["sess_username"] . "'");
$row=mysqli_fetch_array($result,MYSQLI_BOTH);

if($year_value == 1)
	header('Location: year1.php');
else if($year_value == 2)
	header('Location: year2.php');
else if($year_value == 3)
	header('Location: year3.php');

else if($year_value == 4)
	header('Location: year4.php');
?>
