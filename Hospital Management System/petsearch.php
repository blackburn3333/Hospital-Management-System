<?php include 'lvlauth.php'; ?>
<?php include 'connect.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Health Care hospital</title>
<link rel="stylesheet" type="text/css" href="css/staff.css"/>
<link rel="stylesheet" href="css/hide.css">
<style type="text/css">
  .active a{
    background-color: #c6c6c6;
}

</style>
</head>
<script type="text/javascript" src="js/rightde.js"></script>
<body>

<br>
<header class="nav-down ">
<?php include_once('navbar.php');?>
</header>
<input id="admteee" type="hidden" name="admtyp" value="<?php echo $_SESSION['admty']; ?>">
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12 ">
<h1 class="text-center ">Health Care Hospital<br /><small style="font-size:20px">Hospital Management System</small></h1></div>
</div>
</div><br><br><br>
<div class="container-fluid">
<div class="row">
<ul class="nav  nav-justified" style="background-color:#FFF;">
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="patin.php"><strong>Patient Registration</strong></a></li>
<li style="font-family:calibri; font-size:16px;"><a style="color:#000" href="patiinfo.php"><strong>Patient Information</strong></a></li>
<li class="active" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="petsearch.php"><strong>Patient Search</strong></a></li>
<li id="lockkk" style="font-family:calibri; font-size:16px;"><a style="color:#000" href="supadm.php"><strong>Patient Information Edit and Delete</strong></a></li>
</ul>
</div></div>

<div class="container">
<div class="row">
<div class="col-md-6 col-md-push-3">
<br />
<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Search for Patient Info</h3></div>
</div>
<table style="background-color: rgba(255,255,255,0.0);" class="table table-responsive" width="500" border="0"><form action="" method="post">
  <tr>
    <td><input style="font-size:12px" type="text" name="searvalu" class="form-control" placeholder="Enter Registration No / Mobile Number/ Email / First name or Blood Group" /></td>
  </tr><tr align="center">
    <td align="center"><button name="filter"  type="submit" class="btn  btn-default btn-block">Search</button></td>
  </tr></form>
</table>
</div>
</div>
</div>
<div class="container">
<div class="row">
<?php
if (isset($_POST['filter'])){
	$search = ($_POST['searvalu']);
	$self_query = "SELECT * FROM `patient` WHERE concat(`pet_id`, `pet_con`,`pet_em`,`pet_fn`,`pet_bg`) like '%$search%' ORDER BY `pet_id` DESC";
	$result = mysqli_query($con,$self_query);

	while($row = mysqli_fetch_array($result)) { ?>

<div style="padding:20px;  margin:5px; border-radius:5px; background-color:rgba(255, 255, 255, 0.3);"class="col-md-5 col-md-push-1">

<h4 style=" color:">
Patient Reg.No : <?php echo $row["pet_id"]; ?><br />
Patient Name : <?php echo $row["pet_fn"]; ?> <?php echo $row["pet_sn"]; ?><br />
OPD Doctor Registration No : <?php echo $row["Pet_opdid"]?>| <a target="_blank" href="admitdf.php?id= <?php echo $row["Pet_opdid"]; ?>" name="ad"> More Information </a>
</h4>

<dl class="dl-horizontal">

<dt style="font-size:12px;"><strong>Birth Day      : </strong></dt>
<dd style="font-size:12px;"><?php echo $row["pet_bd"]; ?></dd>

<dt style="font-size:12px;"><strong>Contact Number : </strong>
<dd style="font-size:12px;"><?php echo $row["pet_ac"]; ?> <?php echo $row["pet_con"]; ?></dd>

<dt style="font-size:12px;"><strong>Email: </strong></dt>
<dd style="font-size:12px;"><?php echo $row["pet_em"]; ?></dd>

<dt style="font-size:12px;"><strong>Gender: </strong></dt>
<dd style="font-size:12px;"><?php echo $row["pet_gen"]; ?></dd>

<dt style="font-size:12px;"><strong>Blood Group: </strong></dt></dt>
<dd style="font-size:12px;"><?php echo $row["pet_bg"]; ?></dd>

<dt style="font-size:12px;"><strong>Age: </strong></dt>
<dd style="font-size:12px;"><?php echo $row["pet_age"]; ?></dd>

<dt style="font-size:12px;"><strong>Address: </strong></dt>
<dd style="font-size:12px;"><?php echo $row["pet_addr"]; ?></dd>

</dl>

<ul style="" class="nav nav-justified">
<li style="background-color:rgba(255, 255, 255, 0.3);"><a style="colour:#000" target="_blank" href="admit.php?id=<?php echo $row["pet_id"]; ?>" name="ad">Admit to Hospitol</a></li>

</ul>

</div>

<?php }} ?>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/petrej.js"></script>
<script src="js/hidenv.js"></script>
<script type="text/javascript">
  var x = "Basic Administartion"; 
  var y = "Super Administartion";

if(document.getElementById("admteee").value == x)
{
 document.getElementById("lockkk").style.display = 'none';

}else{
  document.getElementById("lockkk").style.display;
}

</script>
</body>
<footer>
	<?php include 'footer.php';?>
</footer>
</html>
