<?php
$tid=$_GET['tid'];
include('adb.php');
$sql=mysqli_query($con," DELETE FROM ticket WHERE tid='$tid'");
if($sql == true)
	{
		echo" 
		<script>
		alert('deleted');
		window.location='ticket.php';
		</script>";

	}
	else
	{
		echo"
		<script>
		alert('failed');
		window.location='ticket.php';
		</script>";
	}
?>