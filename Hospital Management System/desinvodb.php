
<?php
include 'connect.php';

if(isset($_POST['submit']))
  {
	  $dpid      = $_POST['pid'];
	  $dpname    = $_POST['dname'];
	  $dpage     = $_POST['age'];
	  $dpmc      = $_POST['mc'];
	  $dpdc      = $_POST['dc'];
    $dp        = $_POST['cod'];

    $roompr = (("$dp")*(1000));

	  $invo_tot = ((500)+("$dpmc")+("$dpdc")+($roompr));



	$query = "INSERT INTO `admit_invo_db`
(`pet_no`, `pet_name`, `p_age`, `price_of_med`, `price_of_doc`, `day_count`, `price_of_room`, `ser_char`, `totl`)
VALUES
('$dpid','$dpname','$dpage','$dpmc','$dpdc','$dp','$roompr',500,'$invo_tot')";

	  if(mysqli_query($con,$query)){
		  		   $success =  '<div align="center" class="alert alert-success">Registration Successful !</div>';
             header("Location: admite.php");
	  		}


  }
?>
