<?php
	$con = mysqli_connect("localhost","root","");
	date_default_timezone_set ("Asia/Colombo");
	mysqli_select_db($con,"hospitol");
	if(!$con){
			die("Failed to connect");
			}

?>
<?php
define ("HOSTNAME","localhost");
define ("USERNAME","root");
define ("PASSWORD","");
define ("DATABASE","hospitol");

$dbhandle=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die("unable to connect to database");

if($dbhandle->connect_error){
	die("connect Failed".$dbhandle->connect_error);
}
?>