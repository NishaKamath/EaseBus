
<!doctype html>
<html>

<head>
<title>Ticket</title>
</head>
<body>
<?php
$tid=$_GET['tid'];
include('adb.php');
$sql=mysqli_query($con,"SELECT * FROM `ticket` WHERE tid='$tid'");
$res=mysqli_fetch_array($sql);
?>
<form method="post">

<label>Bus id</label>
<input type="number" name="bid" value="<?php echo $res['bid']?>"><br>
<label >Fare</label>
<input type="number" name="total_fare" value="<?php echo $res['total_fare']?>"><br>
<label>Source</label>
<input type="text" name="src" value="<?php echo $res['src']?>"><br>
<label>Destination</label>
<input type="text" name="dest" value="<?php echo $res['dest']?>"><br>
<input type="submit" name="add" value="update">

<?php
$tid=$_GET['tid'];
include('adb.php');

if(isset($_POST['add']))
{
	
	$bid=$_POST['bid'];
	$total_fare=$_POST['total_fare'];
	$src=$_POST['src'];
	$dest=$_POST['dest'];
	

	$qry=mysqli_query($con,"UPDATE `ticket` SET`bid`='$bid',`total_fare`='$total_fare',`src`='$src',`dest`='$dest' WHERE tid='$tid'")or die(mysqli_error($con));
	if($qry == true)
	{
		echo" 
		<script>
		alert('updated');
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
}
?>