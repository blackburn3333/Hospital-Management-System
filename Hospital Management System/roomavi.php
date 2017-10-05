<?php include 'connect.php';?>
<?php include 'pat.php';?>
<?php include 'lvlauth.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/roosi.css">
<script src="js/rooma.js"></script>
<script src="js/roominfo.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Health Care hospital</title>
<link rel="stylesheet" type="text/css" href="css/staff.css"/><script type="text/javascript" src="js/rightde.js"></script>
</head>
<body>
  <link rel="stylesheet" href="css/hide.css">
<header class="nav-down ">
<?php include_once('navbar.php');?>
</header><br>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<h1 class="text-center ">Health Care Hospital<br /><small style="font-size:20px">Hospital Management System</small></h1></div>

</div>
</div>




<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">
<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Room Avilablity</h3></div>
<br />
<div class="container">
<div class="row">
<div class="col-md-6 col-md-push-3 col-xs-12">
<div class="alert alert-info">By clicking<img  width="32px" src="images/info.png"> can get information about admited patient information,</div>
</div>
</div>
</div>
<center>
  <?php include 'romc.php'; ?>
<table style=""    border="0" width="1100">
<tr>
  <td style="border: 5px solid black" id="r1" height="100"><center><div id="">Room No: 1<img id="rr1" width="32px" src="images/info.png"></div><center></td>
  <td style="border: 5px solid black" id="r2" height="100"><center>Room No: 2<img id="rr2" width="32px" src="images/info.png"></center></td>
  <td style="border: 5px solid black" id="r3" height="100"><center>Room No: 3<img id="rr3" width="32px" src="images/info.png"></center></td>
  <td style="border: 5px solid black" id="r4" height="100"><center>Room No: 4<img id="rr4" width="32px" src="images/info.png"></center></td>
  <td style="border: 5px solid black" id="r5" height="100"><center>Room No: 5<img id="rr5" width="32px" src="images/info.png"></center></td>
</tr>
<tr>


  <td valign="top" ><center><div style="padding: 10px" align="left" id="infor1">

<?php
$sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,admit_pet.admit_petid,admit_pet.admit_name,admit_pet.admit_age,admit_pet.admit_bg,admit_pet.pet_des,admit_pet.pet_id
  FROM hospi_room
  LEFT JOIN admit_pet
  ON admit_pet.pet_id=hospi_room.room_petID WHERE room_id = 1";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  Patient ID   : <?php echo $row["pet_id"]; ?><br>
  Patient Name : <?php echo $row["admit_name"]; ?><br>
  Patient Age  : <?php echo $row["admit_age"]; ?><br>
  Patient Blood Group : <?php echo $row["admit_bg"]; ?><br>
  Patient disease : <?php echo $row["pet_des"]; ?>

<?php } ?>

</div></center></td>
  <td valign="top"><center><div  style="padding: 10px" align="left" id="infor2"><?php
$sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,admit_pet.admit_petid,admit_pet.admit_name,admit_pet.admit_age,admit_pet.admit_bg,admit_pet.pet_des,admit_pet.pet_id
  FROM hospi_room
  LEFT JOIN admit_pet
  ON admit_pet.pet_id=hospi_room.room_petID WHERE room_id = 2";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  Patient ID   : <?php echo $row["pet_id"]; ?><br>
  Patient Name : <?php echo $row["admit_name"]; ?><br>
  Patient Age  : <?php echo $row["admit_age"]; ?><br>
  Patient Blood Group : <?php echo $row["admit_bg"]; ?><br>
  Patient disease : <?php echo $row["pet_des"]; ?>

<?php } ?></div></center></td>
  <td valign="top"><center><div  style="padding: 10px" align="left" id="infor3"><?php
$sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,admit_pet.admit_petid,admit_pet.admit_name,admit_pet.admit_age,admit_pet.admit_bg,admit_pet.pet_des,admit_pet.pet_id
  FROM hospi_room
  LEFT JOIN admit_pet
  ON admit_pet.pet_id=hospi_room.room_petID WHERE room_id = 3";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  Patient ID   : <?php echo $row["pet_id"]; ?><br>
  Patient Name : <?php echo $row["admit_name"]; ?><br>
  Patient Age  : <?php echo $row["admit_age"]; ?><br>
  Patient Blood Group : <?php echo $row["admit_bg"]; ?><br>
  Patient disease : <?php echo $row["pet_des"]; ?>

<?php } ?></div></center></td>
  <td valign="top"><center><div  style="padding: 10px" align="left" id="infor4"><?php
$sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,admit_pet.admit_petid,admit_pet.admit_name,admit_pet.admit_age,admit_pet.admit_bg,admit_pet.pet_des,admit_pet.pet_id
  FROM hospi_room
  LEFT JOIN admit_pet
  ON admit_pet.pet_id=hospi_room.room_petID WHERE room_id = 4";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  Patient ID   : <?php echo $row["pet_id"]; ?><br>
  Patient Name : <?php echo $row["admit_name"]; ?><br>
  Patient Age  : <?php echo $row["admit_age"]; ?><br>
  Patient Blood Group : <?php echo $row["admit_bg"]; ?><br>
  Patient disease : <?php echo $row["pet_des"]; ?>

<?php } ?></div></center></td>
  <td valign="top"><center><div  style="padding: 10px" align="left" id="infor5"><?php
$sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,admit_pet.admit_petid,admit_pet.admit_name,admit_pet.admit_age,admit_pet.admit_bg,admit_pet.pet_des,admit_pet.pet_id
  FROM hospi_room
  LEFT JOIN admit_pet
  ON admit_pet.pet_id=hospi_room.room_petID WHERE room_id = 5";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  Patient ID   : <?php echo $row["pet_id"]; ?><br>
  Patient Name : <?php echo $row["admit_name"]; ?><br>
  Patient Age  : <?php echo $row["admit_age"]; ?><br>
  Patient Blood Group : <?php echo $row["admit_bg"]; ?><br>
  Patient disease : <?php echo $row["pet_des"]; ?>

<?php } ?></div></center></td>
</tr>
<tr>
  <td style="border: 5px solid black" id="r6" height="100"><center>Room No: 6<img id="rr6" width="32px" src="images/info.png"></center></td>
  <td style="border: 5px solid black" id="r7" height="100"><center>Room No: 7<img id="rr7" width="32px" src="images/info.png"></center></td>
  <td style="border: 5px solid black" id="r8" height="100"><center>Room No: 8<img id="rr8" width="32px" src="images/info.png"></center></td>
  <td style="border: 5px solid black" id="r9" height="100"><center>Room No: 9<img id="rr9" width="32px" src="images/info.png"></center></td>
  <td style="border: 5px solid black" id="r10" height="100"><center>Room No: 10<img id="rr10" width="32px" src="images/info.png"></center></td>
</tr>
<tr>


  <td valign="top"><center><div style="padding: 10px" align="left" id="infor6">

<?php
$sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,admit_pet.admit_petid,admit_pet.admit_name,admit_pet.admit_age,admit_pet.admit_bg,admit_pet.pet_des,admit_pet.pet_id
  FROM hospi_room
  LEFT JOIN admit_pet
  ON admit_pet.pet_id=hospi_room.room_petID WHERE room_id = 6";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  Patient ID   : <?php echo $row["pet_id"]; ?><br>
  Patient Name : <?php echo $row["admit_name"]; ?><br>
  Patient Age  : <?php echo $row["admit_age"]; ?><br>
  Patient Blood Group : <?php echo $row["admit_bg"]; ?><br>
  Patient disease : <?php echo $row["pet_des"]; ?>

<?php } ?>

</div></center></td>
  <td valign="top" ><center><div style="padding: 10px" align="left" id="infor7"><?php
$sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,admit_pet.admit_petid,admit_pet.admit_name,admit_pet.admit_age,admit_pet.admit_bg,admit_pet.pet_des,admit_pet.pet_id
  FROM hospi_room
  LEFT JOIN admit_pet
  ON admit_pet.pet_id=hospi_room.room_petID WHERE room_id = 7";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  Patient ID   : <?php echo $row["pet_id"]; ?><br>
  Patient Name : <?php echo $row["admit_name"]; ?><br>
  Patient Age  : <?php echo $row["admit_age"]; ?><br>
  Patient Blood Group : <?php echo $row["admit_bg"]; ?><br>
  Patient disease : <?php echo $row["pet_des"]; ?>

<?php } ?></div></center></td>
  <td valign="top"><center><div style="padding: 10px" align="left" id="infor8"><?php
$sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,admit_pet.admit_petid,admit_pet.admit_name,admit_pet.admit_age,admit_pet.admit_bg,admit_pet.pet_des,admit_pet.pet_id
  FROM hospi_room
  LEFT JOIN admit_pet
  ON admit_pet.pet_id=hospi_room.room_petID WHERE room_id = 8";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  Patient ID   : <?php echo $row["pet_id"]; ?><br>
  Patient Name : <?php echo $row["admit_name"]; ?><br>
  Patient Age  : <?php echo $row["admit_age"]; ?><br>
  Patient Blood Group : <?php echo $row["admit_bg"]; ?><br>
  Patient disease : <?php echo $row["pet_des"]; ?>

<?php } ?></div></center></td>
  <td valign="top"><center><div style="padding: 10px" align="left" id="infor9"><?php
$sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,admit_pet.admit_petid,admit_pet.admit_name,admit_pet.admit_age,admit_pet.admit_bg,admit_pet.pet_des,admit_pet.pet_id
  FROM hospi_room
  LEFT JOIN admit_pet
  ON admit_pet.pet_id=hospi_room.room_petID WHERE room_id = 9";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  Patient ID   : <?php echo $row["pet_id"]; ?><br>
  Patient Name : <?php echo $row["admit_name"]; ?><br>
  Patient Age  : <?php echo $row["admit_age"]; ?><br>
  Patient Blood Group : <?php echo $row["admit_bg"]; ?><br>
  Patient disease : <?php echo $row["pet_des"]; ?>

<?php } ?></div></center></td>
  <td valign="top"><center><div style="padding: 10px" align="left" id="infor10"><?php
$sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,admit_pet.admit_petid,admit_pet.admit_name,admit_pet.admit_age,admit_pet.admit_bg,admit_pet.pet_des,admit_pet.pet_id
  FROM hospi_room
  LEFT JOIN admit_pet
  ON admit_pet.pet_id=hospi_room.room_petID WHERE room_id = 10";

$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  Patient ID   : <?php echo $row["pet_id"]; ?><br>
  Patient Name : <?php echo $row["admit_name"]; ?><br>
  Patient Age  : <?php echo $row["admit_age"]; ?><br>
  Patient Blood Group : <?php echo $row["admit_bg"]; ?><br>
  Patient disease : <?php echo $row["pet_des"]; ?>

<?php } ?></div></center></td>
</tr>
</table>
</center>
<br>
<center>
<div class="container">
<div class="row">
<div class="col-md-6 col-md-push-3 col-xs-12">
<div class="alert alert-info">By clicking Doctor Info can get information about Doctor, by clicking Patient Info can get information about admited patient, by clicking   Update Room Informtion can update room information</div>
</div>
</div>
</div>
  <table  style="background-color:#FFF; font-size:12px; " class="table table-striped table-hover">
  <thead>
  <tr>

  <th><strong>Room ID</strong></th>
  <th><strong>Room Name</strong></th>
  <th><strong>Doctor Info Morning</strong></th>
  <th><strong>Doctor Info Evening</strong></th>
  <th><strong>Room Avilability</strong></th>
  <th><strong>Patient Info</strong></th>
  <th><strong>Cleaning Time Morning</strong></th>
  <th><strong>Cleaning Time Evening</strong></th>
  <th></th>
  </tr>
  </thead>
  <tbody>
  <?php
  $count=1;
  $sel_query="SELECT hospi_room.room_petID,hospi_room.eroom_drid,hospi_room.room_id,hospi_room.room_name,hospi_room.room_avilabl,hospi_room.room_drid,hospi_room.rc_time_mo,hospi_room.rc_time_ev,staff.smfname,staff.smlname
  FROM hospi_room
  LEFT JOIN staff
  ON staff.staffID=hospi_room.room_drid  ORDER BY `room_id` ASC ";
  $result = mysqli_query($con,$sel_query);
  while($row = mysqli_fetch_assoc($result)) { ?>
  <tr valign="middle">

      <td  align="left"><?php echo $row["room_id"]; ?></td>
      <td  align="left"><?php echo $row["room_name"]; ?></td>
      <td  align="left"><?php echo $row["room_drid"]?>  | <a target="_blank" href="admitdf.php?id= <?php echo $row["room_drid"]; ?>">Doctor Info</a></td>
      <td  align="left"><?php echo $row["eroom_drid"]?> | <a target="_blank" href="admitdf.php?id= <?php echo $row["eroom_drid"]; ?>">Doctor Info</a></td>
      <td  align="left"><?php echo $row["room_avilabl"]; ?></td>
      <td  align="left"><?php echo $row["room_petID"]; ?> | <a target="_blank" href="admitpf.php?id= <?php echo $row["room_petID"]; ?>">Patient Info</a></td></td>
      <td  align="left"><?php echo $row["rc_time_mo"]; ?></td>
      <td  align="left"><?php echo $row["rc_time_ev"]; ?></td>
      <td  align="center"><a href="roomup.php?id=<?php echo $row["room_id"]; ?>" name="ad">Update Room Informtion</a></td>

  </tr>

  <?php
  $count++; } ?>
  </tbody>
  </table>
</center>
</div>
</div>
</div>
<br>






<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
<script src="js/rooma.js"></script>
<script src="js/roominfo.js"></script>

</body>
<footer>
	 <?php include 'footer.php';?>
</footer>
</html>
