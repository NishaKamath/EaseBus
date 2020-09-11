<?php
$bid=$_GET['bid'];
include('adb.php');
$sql=mysqli_query($con," DELETE FROM `bustable` WHERE bid='$bid'");
if($sql == true)
	{
		echo" 
		<script>
		alert('deleted');
		window.location='bus.php';
		</script>";

	}
	else
	{
		echo"
		<script>
		alert('failed');
		window.location='bus.php';
		</script>";
	}
?>