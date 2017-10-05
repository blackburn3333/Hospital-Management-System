
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
<h3 style="font-family:calibri;" class="text-center">Patient Information</h3></div>
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
	$self_query = "SELECT * FROM `patient` WHERE concat(`pet_id`, `pet_con`,`pet_em`,`pet_fn`,`pet_bg`) like '%$search%' ORDER BY `pet_id` DESC";
	$result = mysqli_query($con,$self_query);

	while($row = mysqli_fetch_array($result)) { ?>
<div style="padding:20px;  margin:5px; border-radius:5px; background-color:rgba(255, 255, 255, 0.3);"class="col-md-5 col-md-push-1">
<dl class="dl-horizontal">
<form class="" action="" method="post" id="upform">
  <input type="hidden" name="new" value="1" />
  <dt style="font-size:12px;"><strong>Patient Reg.No :</strong> </dt>
  <dd style="font-size:12px;"><?php echo $row["pet_id"]; ?></dd>

  <dt style="font-size:12px;"><strong>Patient First Name : </strong> </dt>
  <dd style="font-size:12px;"><input name="pfname" id="patifn" disabled style="margin:5px" class="form-control" type="text" value="<?php echo $row["pet_fn"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Patient Last Name : </strong> </dt>
  <dd style="font-size:12px;"><input name="psname" id="patsn" disabled style="margin:5px" class="form-control" type="text" value=" <?php echo $row["pet_sn"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Birth Day      : </strong></dt>
  <dd style="font-size:12px;"><input name="pdob" id="db" disabled style="margin:5px" class="form-control" type="date" value="<?php echo $row["pet_bd"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Email: </strong></dt>
  <dd style="font-size:12px;"><input name="em" id="em" disabled style="margin:5px" class="form-control" type="text" value="<?php echo $row["pet_em"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Gender: </strong></dt>
  <dd style="font-size:12px;">
  <select  id="gen" disabled style="margin:5px" name="gender" required="required"  class="form-control" placeholder="Select your Gendere">
      <option  value="<?php echo $row["pet_gen"]; ?>"><?php echo $row["pet_gen"]; ?></option>
      <option value="Male">Male</option>
      <option value="Female">Female</option></dd>
  </select>

  <dt style="font-size:12px;"><strong>Blood Group: </strong></dt></dt>
  <dd style="font-size:12px;">
  <select id="bog" disabled style="margin:5px" name="bg" required="required"  class="form-control" placeholder="Select your Staff Type">
  <option value="<?php echo $row["pet_bg"]; ?>"><?php echo $row["pet_bg"]; ?></option>
  <option value="A+">A RhD positive (A+)</option>
  <option value="A-">A RhD negative (A-)</option>
  <option value="B+">B RhD positive (B+)</option>
  <option value="B-">B RhD negative (B-)</option>
  <option value="O+">O RhD positive (O+)</option>
  <option value="O-">O RhD negative (O-)</option>
  <option value="AB+">AB RhD positive (AB+)</option>
  <option value="AB-">AB RhD negative (AB-)</option>
  </select></dd>

  <dt style="font-size:12px;"><strong>Age: </strong></dt>
  <dd style="font-size:12px;"><input disabled style="margin:5px" class="form-control" type="text" value="<?php echo $row["pet_age"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Address: </strong></dt>
  <dd style="font-size:12px;"><input name="padd" id="addr" disabled style="margin:5px" class="form-control" type="text" value="<?php echo $row["pet_addr"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Contact Number : </strong>
  <dd style="font-size:12px;"><div style="margin:5px" class="input-group">
  <span class="  input-group-addon" id="basic-addon1"><?php echo $row["pet_ac"]; ?></span>
  <input name="ptel" id="tel" disabled type="text" class="form-control" value="<?php echo $row["pet_con"]; ?>" placeholder="Username" aria-describedby="basic-addon1 ">
  </dd>

  <dt style="font-size:12px;"><strong>OPD Doctor info: </strong></dt>
  <dd style="font-size:12px;"><?php echo $row["Pet_opdid"]; ?><br> <a target="_blank" href="admitdf.php?id= <?php echo $row["Pet_opdid"]; ?>" name="ad"> More Information </a></dd>

  <dt style="font-size:12px;"><strong>Insert By: </strong></dt>
  <dd style="font-size:12px;"><input name="padd" id="addr" disabled style="margin:5px" class="form-control" type="text" value="<?php echo $row["Insert_admunname"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Inserted Date and Time: </strong></dt>
  <dd style="font-size:12px;"><input name="padd" id="addr" disabled style="margin:5px" class="form-control" type="text" value="<?php echo $row["pet_reg_date"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Update By: </strong></dt>
  <dd style="font-size:12px;"><input name="padd" id="addr" disabled style="margin:5px" class="form-control" type="text" value="<?php echo $row["Update_sadmunname"]; ?>"></dd>

  <dt style="font-size:12px;"><strong>Updated Date and Time: </strong></dt>
  <dd style="font-size:12px;"><input name="padd" id="addr" disabled style="margin:5px" class="form-control" type="text" value="<?php echo $row["update_date"]; ?>"></dd>
  </dl>
<dl>

  <input type="hidden" name="id"  value="<?php echo $row["pet_id"]; ?>" />
</dl>
  <ul style="" class="nav nav-justified">
  <li style="background-color:rgba(255, 255, 255, 0.3);"><a href="suadpeted.php?id=<?php echo $row["pet_id"]; ?>" style="colour:#000">Update</a></li>
  <li style="background-color:rgba(255, 255, 255, 0.3);"><a href="deletepet.php?id=<?php echo $row["pet_id"]; ?>" style="colour:#000">Delete</a></li>
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
	<?php include 'footer.php';?>
</footer>
</html>
