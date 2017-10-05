<?php include 'auth.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/hide.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Health Care hospital</title>
<link rel="stylesheet" type="text/css" href="css/staff.css"/><script type="text/javascript" src="js/rightde.js"></script>
<style type="text/css">
</style>
</head>
<body>
    <header class="nav-down ">
<?php include_once('sanavbar.php');?>
</header>
<?php
require('connect.php');
$id=$_REQUEST['id'];
$query = "SELECT * FROM `staff` WHERE `staffID`='$id'";
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12 ">
<h1 class="text-center ">Health Care Hospital<br /><small style="font-size:20px">Hospital Management System</small></h1></div>
</div>
</div>


<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Update Staff Memeber Information</h3></div>
</div>
</div>
</div>

<div style="border-radius:10px; padding:25px;" class="container-fluid">
<div class="row">
<div class="">
<h4 style="font-family:calibri;" class="text-center">Enable Fields using active field dropdown</h4>
<div class="container">
<div class="row">
<div class="col-md-4 col-md-push-4">
<ul class="nav  nav-justified" style="background-color:#FFF;">
<li style="font-family:calibri; font-size:16px;"><a href="supadminopsm.php">Go Back!</a></ul>
</div>
</div>
</div>
<br />
<?php
require('connect.php');
if(isset($_POST['submit'])){

//$id=$_REQUEST['id'];
$id=$_POST['id'];
$fname =$_POST['pfname'];
$sname =$_POST['psname'];
$petbd=$_POST['pdob'];
$petem=$_POST['em'];
$petgen=$_POST['gen'];
$Petbg = $_POST['bg'];
$petadd=$_POST['padd'];
$pettel=$_POST['ptel'];
$wt = $_POST['wt'];
$submittedby = $_SESSION["sadmun"];
$UP_date = date("Y-m-d H:i:s");



$rquery="UPDATE `staff` SET
`smfname`='$fname',
`smlname`='$sname',
`smaddr`='$petadd',
`smtel`='$pettel',
`smemail`='$petem',
`smgender`='$petgen',
`smbd`='$petbd',
`smtype`='$Petbg',
`update_by`='$submittedby',
`update_date`='$UP_date',
`smwoti`='$wt'
WHERE `staffID` = '$id'";
mysqli_query($con, $rquery) or die(mysqli_error($con));
header("Location: supadminopsm.php");
}
?>

<div style="padding:20px;  margin:5px; border-radius:5px; background-color:rgba(255, 255, 255, 0.3);"class="col-md-4 col-md-push-4">
<dl class="dl-horizontal">
<form class="" action="" method="post" id="upform">
  <input type="hidden" name="new" value="1" />
  <dt style="font-size:12px;"><strong>Staff Memeber Reg.No :</strong> </dt>
  <dd style="font-size:12px;"><?php echo $row["staffID"]; ?></dd>

  <dt style="font-size:12px;"><strong>Staff Memeber First Name : </strong> </dt>
  <dd style="font-size:12px;"><input pattern="[A-Za-z]{1,30}" title="Use Only Letters" name="pfname" id="patifn" style="margin:5px" class="form-control" type="text" value="<?php echo $row["smfname"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Staff Memeber Last Name : </strong> </dt>
  <dd style="font-size:12px;"><input pattern="[A-Za-z]{1,30}" title="Use Only Letters" name="psname" id="patsn"  style="margin:5px" class="form-control" type="text" value=" <?php echo $row["smlname"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Staff Memeber Birth Day      : </strong></dt>
  <dd style="font-size:12px;"><input required="required" name="pdob" id="db" style="margin:5px" class="form-control" type="date" value="<?php echo $row["smbd"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Staff Memeber Email: </strong></dt>
  <dd style="font-size:12px;"><input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Not Valide Email" name="em" id="em"  style="margin:5px" class="form-control" type="text" value="<?php echo $row["smemail"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Staff Memeber Gender: </strong></dt>
  <dd style="font-size:12px;">
  <select name="gen"  id="gen"  style="margin:5px"    class="form-control" placeholder="Select your Gendere">
      <option  value="<?php echo $row["smgender"]; ?>"><?php echo $row["smgender"]; ?></option>
      <option value="Male">Male</option>
      <option value="Female">Female</option></dd>
  </select>

  <dt style="font-size:12px;"><strong>Staff Type: </strong></dt></dt>
  <dd style="font-size:12px;">
  <select id="bog"  style="margin:5px" name="bg"   class="form-control" placeholder="Select your Staff Type">
  <option value="<?php echo $row["smtype"]; ?>"><?php echo $row["smtype"]; ?></option>
  <option value="Doctor">Doctor</option>
  <option value="Nurse">Nurse</option>
  <option value="Other">Other</option>
  </select></dd>

  <dt style="font-size:12px;"><strong>Working time: </strong></dt></dt>
  <dd style="font-size:12px;">
  <select id="wot"   style="margin:5px" name="wt"   class="form-control" placeholder="Select Workign Time">
  <option value="<?php echo $row["smwoti"]; ?>"><?php echo $row["smwoti"]; ?></option>
  <option value="Morning">Morning Time</option>
  <option value="Evening">Evening Time</option>
  <option value="Full">Full Time</option>
  </select></dd>


  <dt style="font-size:12px;"><strong>Staff Memeber Address: </strong></dt>
  <dd style="font-size:12px;"><input required="required" name="padd" id="addr"  style="margin:5px" class="form-control" type="text" value="<?php echo $row["smaddr"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Staff Memeber Contact Number : </strong>
  <dd style="font-size:12px;"><div style="margin:5px" class="input-group">
  <span class="  input-group-addon" id="basic-addon1"><?php echo $row["telcode"]; ?></span>
  <input pattern="\d{9,9}"  maxlength="9" title="Envalid Mobile Number Use only Letters and chacter count must be 9" required="required" name="ptel" id="tel"  type="text" class="form-control" value="<?php echo $row["smtel"]; ?>" placeholder="Username" aria-describedby="basic-addon1 ">
</dd>

  </dl>
<dl>
  <dt style="font-size:12px;"><strong>Active Field: </strong></dt></dt>
  <dd style="font-size:12px;">
  <select onchange="display()"  style="margin:5px; border-colour=red;" id="fieldsac" required="required"  class="form-control" placeholder="Select your Staff Type">
  <option value="DF">Disable Fields</option>
  <option value="ED">Enable Fields</option>
  </select></dd>
  <input type="hidden" name="id"  value="<?php echo $row["staffID"]; ?>" />
</dl>
  <center>
<button disabled id="Button" class="btn" name=submit type="submit">Update</button>
</center>
  </ul>

  </div>
</form>



</div>
</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/pupdate.js"></script>
<script src="js/hidenv.js"></script>
</body>
<footer>
	<hr />
    <center><h5 style="color:#FFF">Developed by Jayendra</h5><center>
</footer>
</html>
