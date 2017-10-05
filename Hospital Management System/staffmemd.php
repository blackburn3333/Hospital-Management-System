<?php include 'staffdb.php';?>
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
</head>
<body>
<link rel="stylesheet" href="css/hide.css">
<style type="text/css">
  .active a{
    background-color: #c6c6c6;
}

</style>

<header class="nav-down ">
<?php include_once('navbar.php');?>
</header>
<br>
<input id="admte" type="hidden" name="admtyp" value="<?php echo $_SESSION['admty']; ?>">
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12 ">
<h1 class="text-center ">Health Care Hospital<br /><small style="font-size:20px">Hospital Management System</small></h1></div>
</div>
</div>
<br><br><br>
<div class="container-fluid">
<div class="row">
  <ul class="nav  nav-justified" style="background-color:#FFF;">
  <li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="staff.php"><strong>Add Staff Memeber</strong></a></li>
  <li class="active" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="staffmemd.php"><strong>Staff Memebers Details</strong></a></li>
  <li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="sestaffactmem.php"><strong>Staff Memeber Search</strong></a></li>
  <li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="staffactmem.php"><strong>Active Members</strong></a></li>
  <li id="lock" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="supadmst.php"><strong>Staff Memeber Modifications</strong></a></li>
  </ul>
</div></div>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">All Staff Memebers</h3></div>
</div>
</div>
</div>
<div style="border-radius:10px; padding:10px;" class="container alert-success">
<div class="row">
<div class="col-md-12">
<h4 style="font-family:calibri;" class="text-center">All registerd staff members in system.</h4>
<br />
<table style="background-color:#FFF; font-size:12px; " class="table table-striped table-hover table-bordered">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Reg.No</strong></th>
<th><strong>Full Name</strong></th>
<th><strong>Staff Memeber Type</strong></th>
<th><strong>Contact Number</strong></th>
<th><strong>Working Time</strong></th>
<th><strong>Address</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT * FROM `staff` ORDER BY `staffID` DESC ";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td align="center"><?php echo $count; ?></td>
    <td align="center"><?php echo $row["staffID"]; ?></td>
    <td align="center"><?php echo $row["smfname"]; ?> <?php echo $row["smlname"]; ?></td>
    <td align="center"><?php echo $row["smtype"]; ?></td>
    <td align="center"><?php echo $row["telcode"]; ?> <?php echo $row["smtel"]; ?></td>
    <td align="center"><?php echo $row["smwoti"]; ?></td>
    <td align="center"><?php echo $row["smaddr"]; ?></td>

</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
<div class="col-md-4">


</table>



</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
<script type="text/javascript">
  var x = "Basic Administartion"; 
  var y = "Super Administartion";

if(document.getElementById("admte").value == x)
{
 document.getElementById("lock").style.display = 'none';
}else{
  document.getElementById("lock").style.display;
}

</script>
</body>
<footer>
	<?php include 'footer.php';?>
</footer>
</html>
