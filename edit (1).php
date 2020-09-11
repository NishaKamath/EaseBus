<!doctype html>
<html>

<head>
<title>Bus</title>
</head>
<body>
<?php
$bid=$_GET['bid']; //request data from specified resource
include('adb.php');
$sql=mysqli_query($con,"SELECT * FROM `bustable` WHERE bid='$bid'");
$res=mysqli_fetch_array($sql);
?>
<form method="post"> //send data to server

<label> model</label>
<input type="text" name="model" value="<?php echo $res['model']?>" ><br>
<label>name</label>
<input type="text" name="name" value="<?php echo $res['name']?>"><br>
<label>type</label>
<input type="text" name="type" value="<?php echo $res['type']?>"><br>
<label >rid</label>
<input type="number" name="rid" value="<?php echo $res['rid']?>"><br>
<label >seats</label>
<input type="number" name="seats" value="<?php echo $res['seats']?>"><br>
<input type="submit" name="add" value="update">
</form>
<?php
$bid=$_GET['bid'];
include('adb.php');

if(isset($_POST['add']))
{
	$model=$_POST['model'];
	$name=$_POST['name'];
	$type=$_POST['type'];
	$rid=$_POST['rid'];
	$seats=$_POST['seats'];

	$qry=mysqli_query($con,"UPDATE `bustable` SET `model`='$model',`name`='$name',`type`='$type',`rid`='$rid', `seats`='$seats' WHERE bid='$bid'")or die(mysqli_error($con));
	if($qry == true)
	{
		echo" 
		<script>
		alert('updated');
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
}
?>
