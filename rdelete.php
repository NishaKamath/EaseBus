<?php
$rid=$_GET['rid'];
include('adb.php');
$sql=mysqli_query($con," DELETE FROM route WHERE rid='$rid'");
if($sql == true)
	{
		echo" 
		<script>
		alert('deleted');
		window.location='route.php';
		</script>";

	}
	else
	{
		echo"
		<script>
		alert('failed');
		window.location='route.php';
		</script>";
	}
?>