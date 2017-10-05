
<?php
include 'connect.php';


if(isset($_POST['submit']))
  {
	  $pet_fname  = $_POST['fname'];
	  $pet_sname  = $_POST['lname'];
	  $pet_add    = $_POST['addr'];
	  $pet_type   = $_POST['bg'];
	  $pet_bd     = $_POST['smbdd'];
	  $pet_cont   = $_POST['tel'];
	  $pet_em	 = $_POST['email'];
	  $pet_gender = $_POST['gender'];
	  $pet_opdid = $_POST['dnames'];
    $insittedby = $_POST["sadmun"];


	  //$trn_date = date("Y-m-d H:i:s");
	  $pet_age = (date("Y-m-d") - ($pet_bd));

	  $checkeml="SELECT pet_em from patient where pet_em ='$pet_em'";
	  $checktel="SELECT pet_con from patient where pet_con ='$pet_cont'";
	   //Execute select SQL Querry
   	$logPermition=mysqli_query($con,$checkeml);
		$logPermitiontel=mysqli_query($con,$checktel);

   		//read sigle row of result set
   	$row=mysqli_fetch_array($logPermition);
		$rowem=mysqli_fetch_array($logPermitiontel);

	  if($pet_type == "syst" | $pet_gender == "syg" | $pet_opdid == "setd" ){
		  $gestwterr = '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">Registration Unsuccessful, please fill all    	fields</div>';}else{
			  if($row['pet_em']==$pet_em){
			  $emlduperr = '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">The Email address you entered is already in use!</div>';
			  if($rowem['pet_con']==$pet_cont){
				  $conduperr = '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">The Contact Number you                         entered is already in use!</div>';
			  }

		}else{

    $query = "INSERT INTO `patient`
	  ( `pet_fn`, `pet_sn`, `pet_addr`, `pet_con`, `pet_em`, `pet_gen`, `pet_bd`, `pet_age`, `pet_bg`,`Pet_opdid`,`Insert_admunname`)
	  VALUES
	  ('$pet_fname','$pet_sname','$pet_add','$pet_cont','$pet_em','$pet_gender','$pet_bd',$pet_age,'$pet_type',$pet_opdid,'$insittedby')";

	  if(mysqli_query($con,$query)){
		  		   $success =  '<div align="center" class="alert alert-success">Registration Successful !</div>';
				   echo '<script type="text/javascript">';

				   echo 'alert("' . $pet_opd . '")';
				   echo '</script>';
	  		}
		}
	  }
  }
?>
