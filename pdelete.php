<?php
$pid=$_GET['pid'];
include('adb.php');
$sql=mysqli_query($con," DELETE FROM passenger WHERE pid='$pid'");
if($sql == true)
	{
		echo" 
		<script>
		alert('deleted');
		window.location='passenger.php';
		</script>";

	}
	else
	{
		echo"
		<script>
		alert('failed');
		window.location='passenger.php';
		</script>";
	}
?>