
<?php include 'connect.php';?>
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
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12 ">
<h1 class="text-center ">Health Care Hospital<br /><small style="font-size:20px">Hospital Management System</small></h1></div>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12 ">
<br></p>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<ul class="nav  nav-justified" style="background-color:#FFF;">
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="supadminop.php"><strong>Patient Information Modify</strong></a></li>
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="supadminopsm.php"><strong>Staff Information Modify</strong></a></li>
</ul>
</div></div>

<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Staff Information</h3></div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-md-4 col-xs-12 col-md-push-4">
<h4 style="font-family:calibri;" class="text-center alert alert-danger">Press Search Buttion for view all details</h4>
</div>
</div>
</div>
<div class="container">
<table style="background-color: rgba(222,444,444,0.0);" class="table table-responsive" width="500" border="0"><form action="" method="post">
  <tr>
    <td><input style="font-size:12px" type="text" name="searvalu" class="form-control" placeholder="Enter Registration No / Mobile Number/ Email / First name or Blood Group" /></td>
  </tr><tr align="center">
    <td align="center"><button name="filter"  type="submit" class="btn  btn-default btn-block">Search</button></td>
  </tr></form>
</table>
</div>
<div style="border-radius:10px; padding:25px;" class="container-fluid">
<div class="row">
<div class="">
<br />

<?php
$count=1;
if (isset($_POST['filter'])){
	$search = ($_POST['searvalu']);
	$self_query = "SELECT * FROM `staff` WHERE concat(`staffID`, `smtel`,`smemail`,`smfname`,`smtype`,`smwoti`) like '%$search%' ORDER BY `staffID` DESC";
	$result = mysqli_query($con,$self_query);

	while($row = mysqli_fetch_array($result)) { ?>
<div style="padding:20px;  margin:5px; border-radius:5px; background-color:rgba(255, 255, 255, 0.3);"class="col-md-5 col-md-push-1">
<dl class="dl-horizontal">
<form class="" action="" method="post" id="upform">
  <input type="hidden" name="new" value="1" />
  <dt style="font-size:12px;"><strong>Patient Reg.No :</strong> </dt>
  <dd style="font-size:12px;"><?php echo $row["staffID"]; ?></dd>
<br>
  <dt style="font-size:12px;"><strong>Patient First Name : </strong> </dt>
  <dd style="font-size:12px;"><input name="pfname" id="patifn" disabled style="margin:5px" class="form-control" type="text" value="<?php echo $row["smfname"]; ?>"></dd>
<br>

  <dt style="font-size:12px;"><strong>Patient Last Name : </strong> </dt>
  <dd style="font-size:12px;"><input name="psname" id="patsn" disabled style="margin:5px" class="form-control" type="text" value=" <?php echo $row["smlname"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Birth Day      : </strong></dt>
  <dd style="font-size:12px;"><input name="pdob" id="db" disabled style="margin:5px" class="form-control" type="date" value="<?php echo $row["smbd"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Email: </strong></dt>
  <dd style="font-size:12px;"><input name="em" id="em" disabled style="margin:5px" class="form-control" type="text" value="<?php echo $row["smemail"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Gender: </strong></dt>
  <dd style="font-size:12px;">
  <select  id="gen" disabled style="margin:5px" name="gender" required="required"  class="form-control" placeholder="Select your Gendere">
      <option  value="<?php echo $row["smgender"]; ?>"><?php echo $row["smgender"]; ?></option>
      <option value="Male">Male</option>
      <option value="Female">Female</option></select></dd>

  <dt style="font-size:12px;"><strong>Staff Memeber Type: </strong></dt>
      <dd style="font-size:12px;">
      <select  id="gen" disabled style="margin:5px" name="gender" required="required"  class="form-control" placeholder="Select your Gendere">
          <option  value="<?php echo $row["smtype"]; ?>"><?php echo $row["smtype"]; ?></option>
          <option value="Doctor">Doctor</option>
          <option value="Nurse">Nurse</option>
          <option value="Other">Other</option></select></dd>

          <dt style="font-size:12px;"><strong>Working Time: </strong></dt>
          <dd style="font-size:12px;">
          <select  id="gen" disabled style="margin:5px" name="gender" required="required"  class="form-control" placeholder="Select your Gendere">
              <option  value="<?php echo $row["smwoti"]; ?>"><?php echo $row["smwoti"]; ?></option>
              <option value="Morning">Morning Time</option>
              <option value="Evening">Evening Time</option>
              <option value="Full">Full Time</option></select></dd>


  <dt style="font-size:12px;"><strong>Address: </strong></dt>
  <dd style="font-size:12px;"><input name="padd" id="addr" disabled style="margin:5px" class="form-control" type="text" value="<?php echo $row["smaddr"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Contact Number : </strong>
  <dd style="font-size:12px;"><div style="margin:5px" class="input-group">
  <span class="  input-group-addon" id="basic-addon1"><?php echo $row["telcode"]; ?></span>
  <input name="ptel" id="tel" disabled type="text" class="form-control" value="<?php echo $row["smtel"]; ?>" placeholder="Username" aria-describedby="basic-addon1 ">
  </dd>

  <dt style="font-size:12px;"><strong>Inserted by: </strong></dt>
  <dd style="font-size:12px;"><input name="padd" id="addr" disabled style="margin:5px" class="form-control" type="text" value="<?php echo $row["instetd_by"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Inserted Date and Time: </strong></dt>
  <dd style="font-size:12px;"><input name="padd" id="addr" disabled style="margin:5px" class="form-control" type="text" value="<?php echo $row["insterted_date"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Update By: </strong></dt>
  <dd style="font-size:12px;"><input name="padd" id="addr" disabled style="margin:5px" class="form-control" type="text" value="<?php echo $row["update_by"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Updated Date and Time: </strong></dt>
  <dd style="font-size:12px;"><input name="padd" id="addr" disabled style="margin:5px" class="form-control" type="text" value="<?php echo $row["update_date"]; ?>"></dd>
  </dl>
<dl>

  <input type="hidden" name="id"  value="<?php echo $row["staffID"]; ?>" />
</dl>
  <ul style="" class="nav nav-justified">
  <li style="background-color:rgba(255, 255, 255, 0.3);"><a href="suadstff.php?id=<?php echo $row["staffID"]; ?>" style="colour:#000">Update</a></li>
  <li style="background-color:rgba(255, 255, 255, 0.3);"><a href="deletestf.php?id=<?php echo $row["staffID"]; ?>" style="colour:#000">Delete</a></li>
  </ul>

  </div>
</form>

<?php
$count++;} } ?>


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
