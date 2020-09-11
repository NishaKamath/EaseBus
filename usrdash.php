<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class=""se-pre-con"">
<h1 class="text-center text-info">EaseBook</h1>
</div>
<nav class="navbar navbar-expand-md bg-dark navbar-dark ">
<a class="navbar-brand" href="usrdash.php">Dashboard</a>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="cp.php">Change Password</a></li>
<li class="nav-item">
<a class="nav-link" href="usrlogout.php">LOGOUT</a></li>
</ul>
</div>
</nav>
<div class="wrapper">
 
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link" href="usrbus.php">Bus Details</a>
    </li>
  
    <li class="nav-item">
      <a class="nav-link" href="usrroute.php">Route Details</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="usrticket.php">Ticket Details</a>
    </li>
    <li class="nav-item">
    <button class="login100-form-btn">
    <a class="nav-link" href="book.php">BOOK NOW</a>
            </button>
</li>

  </ul>
</nav>
</div>
</body>
</html>