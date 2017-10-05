<?php
require('connect.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM `patient` WHERE `pet_id`=$id";
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: supadminop.php");
?>
