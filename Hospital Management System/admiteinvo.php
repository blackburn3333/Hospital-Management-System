<?php include 'connect.php';?>
<?php include 'desinvodb.php';?>
<?php include 'lvlauth.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Health Care hospital</title>
<link rel="stylesheet" type="text/css" href="css/staff.css"/>
<script type="text/javascript" src="js/rightde.js"></script>
</head>
<body>
<?php include_once('navbar.php');?>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<h1 class="text-center ">Health Care Hospital<br /><small style="font-size:20px">Hospital Management System</small></h1></div>

</div>
</div>
<br />


<div class="container-fluid">
<div class="row">
<ul class="nav  nav-justified" style="background-color:#FFF;">
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="admiteinvo.php"><strong>Patient Admited Invoice</strong></a></li>
</ul>
</div></div>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Patient Admited Invoice</h3></div>
<br />


<div class="container">
<div class="row ">
<div class="col-md-4 col-md-offset-4 col-xs-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title text-center">Patient Invoices</h3>
</div>
<center>
<div class="panel-body">
<small class="text-danger">All fields are required</small>
<div>
  <?php
  require('connect.php');
  $id=$_REQUEST['id'];
  $rid=$_REQUEST['rid'];
  $mid=$_REQUEST['mid'];

  $query = "DELETE FROM `admit_pet` WHERE `admit_petid`=$id";
  $result = mysqli_query($con,$query) or die ( mysqli_error());
  $rquery="UPDATE `hospi_room` SET `room_avilabl`= 'AV',`room_petID`='No Patient' WHERE `room_id` = '$rid'";
  $result = mysqli_query($con,$rquery) or die ( mysqli_error($con));


  $squery = "SELECT * FROM `patient` WHERE `pet_id` ='$mid'";
  $result = mysqli_query($con, $squery) or die ( mysqli_error($con));
  $row = mysqli_fetch_assoc($result);
  ?>
<table border="0" class="">
<form id="sreg" name="sreg" action="" method="post">
  <tr>
    <td colspan="2" style="padding:5px">
      Patient Reg No:
    <div class="input-group col-md-12 col-xs-12"><input value="<?php echo $row["pet_id"]; ?>" required  name="pid"   type="text" class="form-control" placeholder="Patient Name">
	</div>
    <div id="fner" class="text-center">
    </div>
	</td>
    </tr>

    <tr>
    <td colspan="2" style="padding:5px">
      Patient Full Name:
    <div class="input-group col-md-12 col-xs-12"><input value="<?php echo $row["pet_fn"]; ?> <?php echo $row["pet_sn"]; ?>" required name="dname" id="lname"   type="text" class="form-control" placeholder="Doctor Name">
	</div>
    </td>
  </tr>

  <tr>

    <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 ">Patient Age:<input value="<?php echo $row["pet_age"]; ?>" name="age"  required="required"   type="number" class="form-control" placeholder="Age"></div></td>
    </tr>
<tr>
    <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 ">Medicine Charge<input name="mc"  required="required"   type="number" class="form-control" placeholder="Medicine Charge"></div></td>
    </tr>
<tr>
    <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 ">Doctor Charge<input name="dc"  required="required"   type="number" class="form-control" placeholder="Doctor Charge"></div></td>
    </tr>
    <tr>
        <td colspan="2" style="padding:5px"><div class="input-group col-md-12 col-xs-12 ">Count of days (Rs.1000.00 per day)<input name="cod"  required="required"   type="number" class="form-control" placeholder="Count of days"></div></td>
        </tr>



  <tr>
  <td colspan="2" style="padding:5px"><div align="center"><button   name="submit" type="submit" class="btn" value="SUBMIT">SUBMIT</button></div></td>
    </tr>
<tr><td colspan="2" style="padding:5px">
<script type="text/javascript">
document.write('<?php echo $success; ?>');
    </script>
</td>
  </tr>
   </form>
</table>
</div>
</div>
</center>
<div class="panel-footer text-center">Press Submit button after completing </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
<footer>
	<?php include 'footer.php';?>
</footer>
</html>
