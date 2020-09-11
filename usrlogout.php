<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>

<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: usrlogin.php");
   }
?>
</body>
</html>