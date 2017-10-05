<?php
require('connect.php');
$id=$_REQUEST['id'];
$rid=$_REQUEST['rid'];
$mid=$_REQUEST['mid'];
$query = "DELETE FROM `admit_pet` WHERE `admit_petid`=$id";
$result = mysqli_query($con,$query) or die ( mysqli_error());
$rquery="UPDATE `hospi_room` SET `room_avilabl`= 'AV' WHERE `room_id` = '$rid'";
$result = mysqli_query($con,$rquery) or die ( mysqli_error());
header('Location: admiteinvo.php');
?>
