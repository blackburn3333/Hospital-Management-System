<?php
	$con = mysqli_connect("localhost","root","");
	date_default_timezone_set ("Asia/Colombo");
	mysqli_select_db($con,"hospitol");
	if(!$con){
			die("Failed to connect");
			}

?>
