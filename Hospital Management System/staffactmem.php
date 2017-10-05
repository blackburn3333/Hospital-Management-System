<?php include 'connect.php';?>
<?php include 'lvlauth.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Health Care hospital</title>
<link rel="stylesheet" type="text/css" href="css/staff.css"/><script type="text/javascript" src="js/rightde.js"></script>
<style type="text/css">
  .active a{
    background-color: #c6c6c6;
}

</style>
</head>
<body>
<link rel="stylesheet" href="css/hide.css">
<header class="nav-down ">
<?php include_once('navbar.php');?>
</header><br>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12 ">
<h1 class="text-center ">Health Care Hospital<br /><small style="font-size:20px">Hospital Management System</small></h1></div>
</div>
</div><br><br><br>
<input id="admtee" type="hidden" name="admtyp" value="<?php echo $_SESSION['admty']; ?>">
<div class="container-fluid">
<div class="row">
  <ul class="nav  nav-justified" style="background-color:#FFF;">
  <li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="staff.php"><strong>Add Staff Memeber</strong></a></li>
  <li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="staffmemd.php"><strong>Staff Memebers Details</strong></a></li>
  <li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="sestaffactmem.php"><strong>Staff Memeber Search</strong></a></li>
  <li class="active" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="staffactmem.php"><strong>Active Members</strong></a></li>
  <li id="lockk" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="supadmst.php"><strong>Staff Member Modifications</strong></a></li>
  </ul>
</div></div>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Active Staff Members</h3></div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<div class="container">
<div class="row">
<div class="col-md-4 col-xs-4 alert-danger"><div class="page-header">
<h4 style="font-family:calibri;" class="text-center">Full Time</h4></div>
<br />
<table style="background-color:#FFF; font-size:12px; " class="table table-striped table-hover table-bordered">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Reg.No</strong></th>
<th><strong>Full Name</strong></th>
<th><strong>Staff Memeber Type</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM `staff` WHERE `smwoti` = 'Full'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td align="center"><?php echo $count; ?></td>
    <td align="center"><?php echo $row["staffID"]; ?></td>
    <td align="center"><?php echo $row["smfname"]; ?> <?php echo $row["smlname"]; ?></td>
    <td align="center"><?php echo $row["smtype"]; ?></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>


</div>



<div class="col-md-4 col-xs-4 alert-info"><div class="page-header">
<h4 style="font-family:calibri;" class="text-center">Morning</h4></div>
<br />
<table style="background-color:#FFF; font-size:12px; " class="table table-striped table-hover table-bordered">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Reg.No</strong></th>
<th><strong>Full Name</strong></th>
<th><strong>Staff Memeber Type</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM `staff` WHERE `smwoti` = 'Morning'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td align="center"><?php echo $count; ?></td>
    <td align="center"><?php echo $row["staffID"]; ?></td>
    <td align="center"><?php echo $row["smfname"]; ?> <?php echo $row["smlname"]; ?></td>
    <td align="center"><?php echo $row["smtype"]; ?></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>




</div>
<div class="col-md-4 col-xs-4 alert-success" ><div class="page-header">
<h4 style="font-family:calibri;" class="text-center">Evening</h4></div>
<br />
<table style="background-color:#FFF; font-size:12px; " class="table table-striped table-hover table-bordered">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Reg.No</strong></th>
<th><strong>Full Name</strong></th>
<th><strong>Staff Memeber Type</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM `staff` WHERE `smwoti` = 'Evening'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td align="center"><?php echo $count; ?></td>
    <td align="center"><?php echo $row["staffID"]; ?></td>
    <td align="center"><?php echo $row["smfname"]; ?> <?php echo $row["smlname"]; ?></td>
    <td align="center"><?php echo $row["smtype"]; ?></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</div>

</div>
</div>
</div>
</div>

<br>
<br>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
<script type="text/javascript">
  var x = "Basic Administartion"; 
  var y = "Super Administartion";

if(document.getElementById("admtee").value == x)
{
 document.getElementById("lockk").style.display = 'none';
}else{
  document.getElementById("lockk").style.display;
}

</script>
</body>
<footer>
  <?php include 'footer.php';?>
</footer>
</html>