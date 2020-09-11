
<!doctype html>
<html>

<head>
<title>Route</title>
</head>
<body>
<?php
$rid=$_GET['rid'];
include('adb.php');
$sql=mysqli_query($con,"SELECT * FROM `route` WHERE rid='$rid'");
$res=mysqli_fetch_array($sql);
?>
<form method="post">


<label>scode</label>
<input type="number" name="scode" value="<?php echo $res['scode']?>"><br>
<label >arr_time</label>
<input type="time" name="arr_time" value="<?php echo $res['arr_time']?>"><br>
<label>depart_time</label>
<input type="time" name="depart_time" value="<?php echo $res['depart_time']?>"><br>
<label>dist</label>
<input type="number" name="dist" value="<?php echo $res['dist']?>"><br>
<label>route</label>
<input type="text" name="route" value="<?php echo $res['route']?>"><br>
<input type="submit" name="add" value="update">
</form>
<?php
$rid=$_GET['rid'];
include('adb.php');

if(isset($_POST['add']))
{
	$scode=$_POST['scode'];
	$arr_time=$_POST['arr_time'];
	$depart_time=$_POST['depart_time'];
	$dist=$_POST['dist'];
	$route=$_POST['route'];
	

	$qry=mysqli_query($con,"UPDATE `route` SET `rid`='$rid',`scode`='$scode',`depart_time`='$depart_time',`arr_time`='$arr_time',`dist`='$dist',`route`='$route' WHERE rid='$rid'")or die(mysqli_error($con));
	if($qry == true)
	{
		echo" 
		<script>
		alert('updated');
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
}
?>