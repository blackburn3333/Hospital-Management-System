
<?php
include 'connect.php';

if(isset($_POST['submit']))
  {
	  $smf_name  = $_POST['fname'];
	  $sms_name  = $_POST['lname'];
	  $sma_add   = $_POST['addr'];
	  $sm_type   = $_POST['typesm'];
	  $sm_bd     = $_POST['smbdd'];
	  $sm_cont   = $_POST['tel'];
	  $sm_em	 = $_POST['email'];
	  $sm_gender = $_POST['gender'];
	  $sm_workt  = $_POST['workt'];




    $insi = $_POST['dmun'];

	  $checkeml="SELECT smemail from staff where smemail='$sm_em'";
	  $checktel="SELECT smtel from staff where smtel='$sm_cont'";
	   //Execute select SQL Querry
   		$logPermition=mysqli_query($con,$checkeml);
		$logPermitiontel=mysqli_query($con,$checktel);

   		//read sigle row of result set
   		$row=mysqli_fetch_array($logPermition);
		$rowem=mysqli_fetch_array($logPermitiontel);

	 if($sm_type == "syst" | $sm_gender == "syg" | $sm_workt == "sywt" )
	 {
      	$gestwterr = '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">Registration Unsuccessful, please fill all fields</div>';

	 }else{
		if($row['smemail']==$sm_em){
           $emlduperr = '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">The Email address you                         entered is already in use!</div>';


		if($rowem['smtel']==$sm_cont){
           $conduperr = '<br/ ><div style="font-size:12px" align="center" class="alert alert-danger">The Contact Number you                         entered is already in use!</div>';

		   }
		}
        else{
		      $query = "INSERT INTO `staff`
		      (`smfname`, `smlname`, `smtype`, `smbd`, `smtel`, `smemail`, `smgender`, `smwoti`, `smaddr`,`instetd_by`)
		       VALUES
		      ('$smf_name','$sms_name','$sm_type','$sm_bd','$sm_cont','$sm_em','$sm_gender','$sm_workt','$sma_add','$insi')";

	  		   if(mysqli_query($con,$query)){
		  		   $success =  '<div align="center" class="alert alert-success">Registration Successful !</div>';
	  		}
		}
	 }

  }
?>
