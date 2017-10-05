<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link href="css/stylelog.css" type="text/css" rel="stylesheet" />
<link href="css/font-awesome.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/rightde.js"></script>
<script type="text/javascript" src="js/rightde.js"></script>
<title>Health Care hospital</title>
</head>

<body>


<div class="container">
<div class="row">
<div class="col-md-12">

<h1 class="text-center ">Health Care Hospital<br /><small style="font-size:20px">Hospital Management System</small></h1>
</div>
</div>
</div>
<br />

<?php
include 'connect.php';
session_start();

	// If form submitted, insert values into the database.
	if (isset($_POST['sadmun'])){

		$typeb = "Basic Administartion";
		$typea = "Super Administartion";
		
	$username = stripslashes($_REQUEST['sadmun']);

// removes backslashes
	$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
	$password = stripslashes($_REQUEST['sadmpw']);
	$password = mysqli_real_escape_string($con,$password);

//Checking is user existing in the database or not
	$query = "SELECT * FROM `lvl2_admin` WHERE `lvtwusern` = '$username'and `lvtwpass` = '".md5($password)."'";
	$querysa = "SELECT * FROM `sup_admin` WHERE `sadiun` = '$username'and `sadipw` = '".md5($password)."'";

	$result = mysqli_query($con,$query) or die(mysqli_error());
	$resultsa = mysqli_query($con,$querysa) or die(mysqli_error());

	$rows = mysqli_num_rows($result);
	$rowss = mysqli_num_rows($resultsa);

	if($rows==1){
		$_SESSION['sadmun'] = $username;
		$_SESSION['admty']  = $typeb;
		header("Location: menu.php"); // Redirect user to index.php
	}
	else if ($rowss==1){
		$_SESSION['sadmun'] = $username;
		$_SESSION['admty']  = $typea;
		header("Location: menu.php"); // Redirect user to index.php
	}

					else{
			$fail = '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">Invalid Username or Password</div>';
			}
	}
?>

<div class="container">
<div class="row">
<div class="col-md-4 col-md-push-2  col-xs-12 ">
	<form action="" method="post">
	<center>
	<img id="mimg" src="images/log/mimg.png" class="img-responsive" />
	<br>
	<div class="input-group input-group-lg"><span class="input-group-addon"><img style="width:30px" src="images/log/user.png" /></span>
	  <input name="sadmun" required="required" style=" height:52px; font-size:20px" id="field" type="text" class="form-control " placeholder="Username">
	</div>
	<br />
	<div class="input-group input-group-lg"><span class="input-group-addon"><img style="width:30px" src="images/log/lock.png" /></span>
	  <input name="sadmpw" required="required" style=" font-size:20px; height:52px;" type="password" class="form-control " placeholder="Password">
	</div>
	<br />
	<div align="center">
	<button name="login" onclick="chcke();"  type="submit" value="SUBMIT" class="btn ">SUBMIT</button>
	<br>
	<center><script type="text/javascript">
	document.write('<?php echo $fail; ?>');</script></center>
	<div align="center">
		<br>
		<p>Not registered yet? <a target="_blank" style="font-colour="Blue"" href='superadmin.php'>Register Here</a></p>
	</div>

	</div>
	</form>

	</div>
	<div style="font-size :18px; border-style: none  none none dotted; border-width: 2px; border-color: rgba(0, 0, 0, 0.2); height: 390px;text-align: justify;" class="col-md-4 col-md-push-2  col-xs-12 "><br>This the main system login form for to access the system. you can enter both Super and Basic admin login details. if you are not a memeber of systme create your login access with using <a target="_blank" style="font-colour="Blue"" href='superadmin.php'>Register Here</a>
<br>
	<br>Enter Login details that provided by Hospital Administartion. </div>
	</div>

	<br><br>

</div>
</div>


	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
	<br>
	<footer class="foot2">
		<div class="container-fluid">
    <div class="row">
        <div style="padding: 10px;" class="col-md-10 col-md-push-2">
Copyright © 2016 Jayendra Matarage. All rights reserved.
        </div>
    </div>
    </div>
	</footer>
	
	</html>
