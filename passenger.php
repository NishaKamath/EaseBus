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
<h1 class="text-center text-info">passenger details</h1>
</div>
<nav class="navbar navbar-expand-md bg-dark navbar-dark ">
<a class="navbar-brand" href="dashboard.php">Dashboard</a>
</nav>

<hr>
	<table border="1" class="table table-striped table-bordered">
	<thead>
	<tr>
	
	<th>tid</th>
	<th>name</th>
	<th>age</th>
	<th>gender</th>
	<th>pedit</th>
	<th>pdelete</th>
	</tr>
	</thead>
	<tbody>
<?php
		  include('adb.php');
		  $qq = mysqli_query($con,"SELECT * FROM `passenger`");
		  while($res=mysqli_fetch_array($qq))
		  {
			echo' 
			<tr>
		
			
			<td>' .$res['tid']. '</td>
			<td>' .$res['name']. '</td>
			<td>' .$res['age']. '</td>
			<td>' .$res['gender']. '</td>
			<td><a href="pedit.php?pid='.$res['pid'].' ">Edit</a></td>
		    <td><a href="pdelete.php?pid='.$res['pid'].' ">delete</a></td>
			</tr>
			';
		  }
		  ?>
		  </tbody>
		  </table>