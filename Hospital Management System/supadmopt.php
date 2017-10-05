<?php include 'connectt.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="css/stylelog.css" type="text/css" rel="stylesheet" />
<link href="css/font-awesome.css" type="text/css" rel="stylesheet" />
<style type="text/css">
  .active a{
    background-color: #c6c6c6;
}
</style>


<script type="text/javascript">
  function chechunfn(val){
    $.ajax({
      type:"POST",
      url:"cheunex.php",
      data:'unex='+val,
      success: function(data){
          $("#msg").html(data);
      }
    })
  }
</script>
<script type="text/javascript">
  function chechemfn(val){
  $.ajax({
      type:"POST",
      url:"usernmeex.php",
      data:'unem='+val,
      success: function(data){
          $("#msge").html(data);
      }
    })
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><script type="text/javascript" src="js/rightde.js"></script>
<title>Health Care hospital</title>
</head>
<body>
<?php include 'slvlauth.php'; ?>
<div style="background-color: white; height: 40px; padding: 10px; z-index: 1; position:fixed; width: 1366px;">
You are Welcome Top Level <?php echo $_SESSION['topadun']; ?> Options. <a href="dminlogout.php">Logout</a>
</div>
<br>
<br><br />
<div class="container">
<div class="row">
<div class="col-md-12">

<h1 class="text-center ">Health Care Hospital<br /><small style="font-size:20px">Hospital Management System</small></h1>
</div>
</div>
</div>
<br /><br />
<div class="container-fluid">
<div class="row">
<ul class="nav   nav-justified" style="background-color:#FFF;">
  <li class="active" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="supadmopt.php"><strong>Super Admin Options</strong></a></li>
  <li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="basiadminopts.php"><strong>Basic Admin Options</strong></a></li>
</ul>
</div></div>
<hr>
<div class="container-fluid">
<div class="row col-md-8 col-md-offset-2 col-xs-12">
<ul class="nav  nav-justified" style="background-color:#FFF;">
  <li class="active" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="supadmopt.php"><strong>insert super administration</strong></a></li>
  <li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="deletesupad.php"><strong>Delete Super administration</strong></a></li>
</ul>
<hr>
</div></div>
<?php
	include 'connect.php';
    // If form submitted, insert values into the database.
    if (isset($_POST['register'])){

		$admfuname = $_POST['ufn'];
		$admun = $_POST['unn'];
		$admemail = $_POST['uemail'];
		$admpw = $_POST['upw'];
		$admpwdup = $_POST['ucpw'];

		$trn_date = date("Y-m-d H:i:s");

		$checkeml ="SELECT sadem FROM sup_admin WHERE sadem = '$admemail'";
	  $checkun  ="SELECT sadiun FROM sup_admin WHERE sadiun = '$admun'";

    $checkemlbad ="SELECT lvtwemail FROM lvl2_admin WHERE lvtwemail = '$admemail'";
    $checkeunlbad ="SELECT lvtwusern FROM lvl2_admin WHERE lvtwusern = '$admun'";

	  $logPermitionem=mysqli_query($con,$checkeml);
		$logPermitionun=mysqli_query($con,$checkun);

    $logPermitionenba=mysqli_query($con,$checkemlbad);
    $logPermitionunba=mysqli_query($con,$checkeunlbad);

   		//read sigle row of result set
   	$rowem=mysqli_fetch_array($logPermitionem);
		$rowemun=mysqli_fetch_array($logPermitionun);

    $rowemunba=mysqli_fetch_array($logPermitionenba);
    $rowemenba=mysqli_fetch_array($logPermitionunba);


        if($rowemun['sadiun']==$admun || $rowemenba['lvtwusern']==$admun ){
        $lvltadeun = '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">The Username you entered is already in use!</div>';
		}
	  	else if($rowem['sadem']==$admemail || $rowemunba['lvtwemail']==$admemail ){
        $lvltademe = '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">The Email address you entered is already in use!</div>';
		}

		else if($admpwdup != $admpw ){
        $pwm = '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">Passwords and Conform password do not match</div>';
			}

        else
		{
        $query = "INSERT INTO `sup_admin`(`sadiun`, `sadipw`, `sadem`, `saname`, `cret_date`) VALUES ('$admun','".md5($admpw)."','$admemail','$admfuname','$trn_date')";


        if(mysqli_query($con,$query)){
            $regs = '<br> <div align="center" class="alert alert-success">Registration Successful !</div>';
        }}
    }else{}
?>

<div align="center" >
You are welcome to system users registraion from.</div><br>
<div class="alert alert-danger col-md-4 col-md-offset-4 col-xs-12 text-center">This user registration form creates Super adminstration accounts.</div></div>
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4 col-xs-12">
<div class="panel panel-default">
<div class="panel-heading text-center">Super adminstration registration form</div>

  <div class="panel-body"><center>
  <small class="text-danger">All fields are required</small>
    <form action="" method="post">

<table style="border:none; background-color: #FFFFFF;"  border="0" class="table table-responsive">
<tr>
<td colspan="2" style="padding:5px;">
  <input name="ufn"   required="required" style="border-radius:0px; padding:10px; background-color: " type="text" class="form-control" placeholder="Full Name">
</td>

</tr>
<tr>
<td colspan="2" style="padding:5px;">

  <input onkeyup="chechunfn(this.value)" name="unn" type="text" required="required" class="form-control" placeholder="Username" style="border-radius:0px"><div id="msg"></div>
  <center><script type="text/javascript">
document.write('<?php echo $lvltadeun; ?>');</script></center>


</td>
</tr>
<tr><td colspan="2" style="padding:5px;">
  <input onkeyup="chechemfn(this.value)" name="uemail"  required="required" style="border-radius:0px" type="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Not Valide Email" class="form-control" placeholder="Email">
  <div id="msge"></div><center><script type="text/javascript">
document.write('<?php echo $lvltademe; ?>');</script></center>

</td></tr>
<tr><td colspan="2" style="padding:5px;">
  <input name="upw"  required="required" style="border-radius:0px" type="password" class="form-control" placeholder="Password"></td>
</tr><tr><td colspan="2" style="padding:5px;">
  <input name="ucpw"  required="required" style="border-radius:0px" type="password" class="form-control" placeholder="Conform Password"><center><script type="text/javascript">
document.write('<?php echo $pwm; ?>');</script> </center> </td></tr>
  <tr><td colspan="2" style="padding:5px;"><center><button name="register" class="btn btn-block">Submit</button></center></td></tr>

</table>
<center><script type="text/javascript">
document.write('<?php echo $regs; ?>');</script> </center>
</center></form>




  </div>
  <div class="panel-footer text-center">Press Submit button after completing</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
</body>
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

