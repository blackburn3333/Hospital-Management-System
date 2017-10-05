<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<link href="css/stylelog.css" type="text/css" rel="stylesheet" />
<link href="css/font-awesome.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/hide.css">
<script type="text/javascript" src="js/rightde.js"></script>
<style type="text/css">
  .active a{
    background-color: #c6c6c6;
}

</style>
<title>Health Care hospital</title>
</head>

<body>
<br>
<?php include('lvlauth.php');?>
<header class="nav-down ">
<?php include_once('navbarcus.php');?>
</header>
<div class="container">
<div class="row">
<div class="col-md-12">

<h1 class="text-center ">Health Care Hospital<br /><small style="font-size:20px">Hospital Management System</small></h1>
</div>
</div>
</div>
<br /><br><br>
<div class="container-fluid">
<div class="row">
<ul class="nav  nav-justified" style="background-color:#FFF;">
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="patin.php"><strong>Patient Registration</strong></a></li>
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="patiinfo.php"><strong>Patient Information</strong></a></li>
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="petsearch.php"><strong>Patient Search</strong></a></li>
<li class="active" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="supadm.php"><strong>Patient Information Edit and Delete</strong></a></li>
</ul>
</div></div>
<br>
<br>
<div class="container-fluid">
<div class="row">
<div class="col-md-4 col-md-offset-5 col-xs-4 col-xs-offset-4">
<img id="mimg" src="images/log/mimg.png" class="img-responsive" />
</div>
</div>
</div>
<br />
<div class="container-fluid">
<div class="row">
	<div class="col-md-4 col-md-offset-4 col-xs-12 alert alert-danger"><div align="center">Enter Super Administration Details to login</div></div>
</div>
</div>
<div class="container-fluid">
<div class="row">
	<?php
	include 'connect.php';
	
    // If form submitted, insert values into the database.
    if (isset($_POST['sadmun'])){

		$username = stripslashes($_REQUEST['sadmun']);

// removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['sadmpw']);
		$password = mysqli_real_escape_string($con,$password);

	//Checking is user existing in the database or not
    $query = "SELECT * FROM `sup_admin` WHERE `sadiun`='$username'and `sadipw`='".md5($password)."'";

		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['sadmun'] = $username;
			
			header("Location: supadminop.php"); // Redirect user to index.php
            }else{
				$fail = '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">Invalid Username or Password</div>';
				}
    }
?>
<form action="" method="post">
<div class="col-md-4 col-md-offset-4 col-xs-12 ">
<div class="input-group input-group-lg"><span class="input-group-addon"><img style="width:30px" src="images/log/user.png" /></span>
  <input name="sadmun" required="required" style=" height:52px; font-size:20px" id="field" type="text" class="form-control " placeholder="Username" value="<?php echo $_SESSION['sadmun']; ?>">
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
</div>

</div>
</form>

</div>
</div>
<br><br>

</div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
</body>
<footer>
  <?php include 'footer.php';?>
</footer>
</html>