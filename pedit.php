<!doctype html>
<html>

<head>
<title>Passenger</title>
</head>
<body>
<?php
$pid=$_GET['pid'];
include('adb.php');
$sql=mysqli_query($con,"SELECT * FROM `passenger` WHERE pid='$pid'");
$res=mysqli_fetch_array($sql);
?>
<form method="post">

<label> tid</label>
<input type="number" name="tid" value="<?php echo $res['tid']?>" ><br>
<label>name</label>
<input type="text" name="name" value="<?php echo $res['name']?>"><br>

<label >age</label>
<input type="number" name="age" value="<?php echo $res['age']?>"><br>
<label>gender</label>
<input type="text" name="gender" value="<?php echo $res['gender']?>"><br>

<input type="submit" name="add" value="update">
</form>
<?php
$pid=$_GET['pid'];
include('adb.php');

if(isset($_POST['add']))
{
	$tid=$_POST['tid'];
	$name=$_POST['name'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	

	$qry=mysqli_query($con,"UPDATE `passenger` SET `tid`='$tid',`name`='$name',`age`='$age',`gender`='$gender' WHERE pid='$pid'")or die(mysqli_error($con));
	if($qry == true)
	{
		echo" 
		<script>
		alert('updated');
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
}
?>