<!DOCTYPE html>
<html>
<head>
	<title>Ticket details</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="wrapper">
<h1 class="text-center text-info">Ticket details</h1>
</div>
<nav class="navbar navbar-expand-md bg-dark navbar-dark ">
<a class="navbar-brand" href="dashboard.php">Dashboard</a>
</nav>

<hr>
	<table border="1" class="table table-striped table-bordered">
	<thead>
	<tr>
	<th>Bus id</th>
	<th>Fare</th>
	<th>Source</th>
	<th>Destination</th>
	<th>edit</th>
	<th>delete</th>
	</tr>
	</thead>
	<tbody>

<?php
		  include('adb.php');
		  $qq = mysqli_query($con,"SELECT * FROM ticket");
		  while($res=mysqli_fetch_array($qq))
		  {
			echo' 
			<tr>
		
			<td>' .$res['bid']. '</td>
			<td>' .$res['total_fare']. '</td>
			<td>' .$res['src']. '</td>
			<td>' .$res['dest']. '</td>

			<td><a href="tedit.php?tid='.$res['tid'].' ">Edit</a></td>
		    <td><a href="tdelete.php?tid='.$res['tid'].' ">delete</a></td>
			</tr>
			';
		  }
		  ?>
		  </tbody>
		  </table>