
<?php
include 'connect.php';

if(isset($_POST['submit']))
  {
	  $in_pname  = $_POST['pname'];
	  $in_dname  = $_POST['dname'];
	  $in_age    = $_POST['age'];
	  $in_mc   = $_POST['mc'];
	  $in_dc     = $_POST['dc'];

	  $invo_date = date("Y-m-d H:i:s");
	  $invo_tot = ((1500)+("$in_mc")+("$in_dc"));



	$query = "INSERT INTO `pet_invo`
	( `invo_doc_name`, `invo_Pet_name`, `invo_pet_id`, `invo_pet_age`, `invo_date`, `medi_charge`, `doc_charge`, `hos_charge`, `total_charge`)
	VALUES
	('$in_dname','$in_pname',11,'$in_age','$invo_date','$in_mc','$in_dc',1500,$invo_tot)";

	  if(mysqli_query($con,$query)){
		  		   $success =  '<div align="center" class="alert alert-success">Registration Successful !</div>';
	  		}


  }
?>
