<!DOCTYPE html>
<html lang="en">
<head>
  <title>Booking Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/boss.png"/>
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> 
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> 
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(head.jpg);">
          <span class="login100-form-title-1">
            BOOKING
          </span>
        </div>

        <form class="login100-form validate-form" method="post">

            <div class="wrap-input100 validate-input m-b-18" data-validate = "Required">
            <span class="label-input100">From</span>
            <input class="input100" type="text" name="From" placeholder="From">
            <span class="focus-input100"></span>
          </div>
          
          <div class="wrap-input100 validate-input m-b-18" data-validate = "Required">
            <span class="label-input100">To</span>
            <input class="input100" type="text" name="To" placeholder="To">
            <span class="focus-input100"></span>
          </div>

            <div class="wrap-input100 validate-input m-b-18" data-validate = "Required">
            <span class="label-input100">Date</span>
            <input class="input100" type="date" name="Date" placeholder="Enter Date">
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 validate-input m-b-26" data-validate="Name is required">
            <span class="label-input100">Name</span>
            <input class="input100" type="text" name="name" placeholder="Enter name">
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 validate-input m-b-18" data-validate = "age is required">
            <span class="label-input100">Age</span>
            <input class="input100" type="text" name="Age" placeholder="Enter age">
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 validate-input m-b-18" data-validate = "gender is required">
            <span class="label-input100">Gender</span>
            <input class="input100" type="text" name="Gender" placeholder="Gender">
            <span class="focus-input100"></span>
          </div>
          

            <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              <input class="input100" type="submit" name="submit">
            </button>
          </div>
        </form>


      </div>
    </div>
  </div>
     

  
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendor/animsition/js/animsition.min.js"></script>
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/select2/select2.min.js"></script>
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
  <script src="vendor/countdowntime/countdowntime.js"></script>
  <script src="js/main.js"></script>
<?php

include('adb.php');

if (isset($_POST['submit'])) {
  
  $from = mysqli_real_escape_string($con, $_POST['From']);
  $to = mysqli_real_escape_string($con, $_POST['To']);
  $date = mysqli_real_escape_string($con, $_POST['Date']);
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $age = mysqli_real_escape_string($con, $_POST['Age']);
  $gender = mysqli_real_escape_string($con, $_POST['Gender']);
  
if($name !=''){
  	$query = "INSERT INTO book (src,dest,dat,name, age, gender) 
  			  VALUES('$from','$to','$date','$name','$age', '$gender')";
  	mysqli_query($con, $query);
        echo "Booking done!";
            header('location: usrdash.php');

  }
  else
  {
  	echo "Booking failed";
  }
}
