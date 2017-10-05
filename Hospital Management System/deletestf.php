<?php
require('connect.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM `staff` WHERE `staffID`=$id";
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: supadminopsm.php");
?>
