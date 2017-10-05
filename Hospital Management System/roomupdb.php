
<?php
include 'connect.php';

if(isset($_POST['submit']))
  {
	  $rid_pid     = $_POST['ridd'];
	  $ro_d        = $_POST['mrdo'];
    $ero_d        = $_POST['erdo'];
    $admm_date   = date("Y-m-d");

    $rquery = "UPDATE `hospi_room` SET `room_drid`='$ro_d',`eroom_drid` = '$ero_d' WHERE `room_id` = '$rid_pid'";
    if(mysqli_query($con,$rquery)){
		$success =  '<div align="center" class="alert alert-success">Registration Successful !</div>';
    header("Location: roomavi.php");
	  		}
		}



?>
