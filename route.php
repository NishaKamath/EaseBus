<!DOCTYPE html>
<html>
<head>
	<title>route details</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="wrapper">
<h1 class="text-center text-info">route details</h1>
</div>
<nav class="navbar navbar-expand-md bg-dark navbar-dark ">
<a class="navbar-brand" href="dashboard.php">Dashboard</a>
</nav>

<hr>
	<table border="1" class="table table-striped table-bordered">
	<thead>
	<tr>
	<th>station code</th>
	<th>departure time</th>
	<th>arrival time</th>
	<th>distance</th>
	<th>route</th>
	<th>edit</th>
	<th>delete</th>
	</tr>
	</thead>
	<tbody>
<?php
		  include('adb.php');
		  $qq = mysqli_query($con,"SELECT * FROM route");
		  while($res=mysqli_fetch_array($qq))
		  {
			echo' 
			<tr>
		
			<td>' .$res['scode']. '</td>
			<td>' .$res['depart_time']. '</td>
			<td>' .$res['arr_time']. '</td>
			<td>' .$res['dist']. '</td>
			<td>' .$res['route']. '</td>
			<td><a href="redit.php?rid='.$res['rid'].' ">Edit</a></td>
		    <td><a href="rdelete.php?rid='.$res['rid'].' ">delete</a></td>
			</tr>
			';
		  }
		  ?>
		  </tbody>
		  </table>